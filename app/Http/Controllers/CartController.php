<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

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
        //return dd($cart);
        return view('pages.cart',compact('cart'));
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
                    return redirect()->back()->with('alert', 'vous  avez deja un '.$request->input('slug').'!');
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
