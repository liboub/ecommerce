<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content()->all();
        $conso = 0;

        $CompReturn = array(
          "alert_proc_cm" => "warning",
          "msg_proc_cm" => "",
          "alert_cm_ram" => "warning",
          "msg_cm_ram" => "",
          "alert_cm_boitier" => "warning",
          "msg_cm_boitier" => "",
          "alert_alim" => "warning",
          "msg_alim" => ""
        );
        $products = array();

        foreach ($cart as $single){
            $products[]=DB::table('composants')
                ->leftJoin('categories','composants.categorie_id','=','categories.id')
                ->select('composants.id','composants.prix','composants.modele','composants.description','composants.taille','composants.stock','composants.poids','composants.stock',
                    'composants.consommation','composants.frequence','composants.capacite','composants.socket','composants.atx','composants.microAtx','composants.type_stockage','composants.type_ram',
                    'composants.proc_nb_coeur','composants.proc_nb_thread','composants.alim_puissance','composants.categorie_id','composants.created_at','composants.updated_at','composants.image',
                    'categories.name','categories.slug')
                ->where('composants.id','=',$single->id)
                ->first();
        }
        /*
        $processeur = array_filter(
            $products,
            function ($e){
                return $e->slug == 'processeur';
            }
        );
        */

        foreach ($products as $product){
            switch ($product->slug) {
                case 'processeur':
                    $processeur=$product;
                    break;
                case 'ram':
                    $ram=$product;
                    break;
                case 'carte-mere':
                    $carte_mere=$product;
                    break;
                case 'boitier':
                    $boitier=$product;
                    break;
                case 'alimentation':
                    $alimentation=$product;
                    break;
            }
            $conso += $product->consommation;
        }

        if(isset($carte_mere)){
            if(isset($processeur)){
                if($carte_mere->socket == $processeur->socket){
                    $CompReturn["alert_proc_cm"] = "success";
                    $CompReturn["msg_proc_cm"] = "Processeur et carte-mêre compatibles";
                }else{
                    $CompReturn["alert_proc_cm"] = "danger";
                    $CompReturn["msg_proc_cm"] = "Processeur et carte-mêre non compatibles";
                }
            } else{
                $CompReturn["msg_proc_cm"] = "Pas de processeur";
            }

            if (isset($ram)){
                if($carte_mere->type_ram == $ram->type_ram){
                    $CompReturn["alert_cm_ram"] = "success";
                    $CompReturn["msg_cm_ram"] = "RAM et carte-mêre compatibles";
                }else{
                    $CompReturn["alert_cm_ram"] = "danger";
                    $CompReturn["msg_cm_ram"] = "RAM et carte-mêre non compatibles";
                }
            } else{
                $CompReturn["msg_cm_ram"] = "Pas de RAM";
            }

            if (isset($boitier)){
                if($carte_mere->atx == $boitier->atx or $carte_mere->microAtx == $boitier->microAtx){
                    $CompReturn["alert_cm_boitier"] = "success";
                    $CompReturn["msg_cm_boitier"] = "Boitier et carte-mêre compatibles";
                }else{
                    $CompReturn["alert_cm_boitier"] = "danger";
                    $CompReturn["msg_cm_boitier"] = "Boitier et carte-mêre non compatibles";
                }
            }else{
                $CompReturn["msg_cm_boitier"] = "Pas de boitier";
            }
        }else{
            if(isset($processeur)){
                $CompReturn["msg_proc_cm"] = "Pas de carte-mêre";
            } else{
                $CompReturn["msg_proc_cm"] = "Pas de processeur ni de carte-mêre";
            }

            if (isset($ram)){
                $CompReturn["msg_cm_ram"] = "Pas de carte-mêre";
            } else{
                $CompReturn["msg_cm_ram"] = "Pas de RAM ni de carte-mêre";
            }

            if (isset($boitier)){
                $CompReturn["msg_cm_boitier"] = "Pas de carte-mêre";
            }else{
                $CompReturn["msg_cm_boitier"] = "Pas de boitier ni de carte-mêre";
            }
        }

        if(isset($alimentation)){
            if ($alimentation->alim_puissance >= $conso+150){
                $CompReturn["alert_alim"] = "success";
                $CompReturn["msg_alim"] = "L'alimentation a assez de puissance";
            }else{
                $CompReturn["alert_alim"] = "danger";
                $CompReturn["msg_alim"] = "L'alimentation n'a pas assez de puissance";
            }
        }else{
            $CompReturn["msg_alim"] = "Pas d'alimentation";
        }

        //return dd($products);
        return view('pages.cart',compact('cart','CompReturn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Cart::content()->count() > 0 )
        {
            foreach (Cart::content() as $single){
                if ($request->input('slug') == $single->options['slug']){
                    return redirect()->back()->with('alert', 'Vous  avez déja un(e) '.$request->input('slug').'!');
                }
                else{
                    Cart::add($request->input('id'),$request->input('modele'),1,
                        $request->input('prix'),['image' => $request->input('image'),'slug' => $request->input('slug') ])
                        ->associate('App/Composants');
                    return redirect('/cart');
                }
            }
        }
        else{
            Cart::add($request->input('id'),$request->input('modele'),1,
                $request->input('prix'),['image' => $request->input('image'),'slug' => $request->input('slug') ])
                ->associate('App/Composants');
            return redirect('/cart');
        }



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach (Cart::content() as $single)
        {
              Cart::store($single->rowId);

        }
       // $rowId = Cart::content()->last()->rowId;
        //return dd(Cart::content());
        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart');
    }

    public function  destroyDoublon(Request $request){
        foreach (Cart::content() as $single) {
            if ($request->input('slug') == $single->options['slug']) {
                Cart::remove($single->rowId);

            }
        }
                Cart::add($request->input('id'),$request->input('modele'),1,
                    $request->input('prix'),['image' => $request->input('image'),'slug' => $request->input('slug') ])
                    ->associate('App/Composants');
                return redirect('/cart');


    }
}
