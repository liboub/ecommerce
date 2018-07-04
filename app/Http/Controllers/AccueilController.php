<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
    public function view()
    {
     $composants = DB::table('composants')->get();
     return view('pages.accueil', compact('composants'));
    }
}
