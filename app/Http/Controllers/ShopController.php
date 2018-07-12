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
            ->get();

        $categories = DB::table('categories')
            ->select('id','name','slug')
            ->get();

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

        return view('pages.product')->with('composant',$composant);
    }
}