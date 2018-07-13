<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 7/10/2018
 * Time: 8:42 PM
 */

namespace App\Http\Controllers;

use App\Composant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController
{
    public function view()
    {
        $composants = DB::table('composants')
            ->leftJoin('categories','composants.categorie_id','=','categories.id')
            ->select('composants.id','composants.prix','composants.modele','composants.description','composants.taille','composants.stock','composants.poids','composants.stock',
                'composants.consommation','composants.frequence','composants.capacite','composants.socket','composants.atx','composants.microAtx','composants.type_stockage','composants.type_ram',
                'composants.proc_nb_coeur','composants.proc_nb_thread','composants.alim_puissance','composants.categorie_id','composants.created_at','composants.updated_at','composants.image',
                'categories.name','categories.slug')
            ->get();

        $categories = DB::table('categories')
            ->select('id','name','slug')
            ->get();

         //return dd($composants);
       return view('pages.shop', compact('composants','categories'));
    }

    /**
     *
     * affiche la page produit voulu
     *
     * @param $id
     */
    public function show($id)
    {

        $composant = DB::table('composants')
            ->where('composants.id',$id)
            ->leftJoin('categories','composants.categorie_id','=','categories.id')
            ->first();
        $composant->description = strip_tags($composant->description);
        //return dd($composant);
        return view('pages.product')->with('composant',$composant);
    }
}