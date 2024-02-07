<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cantine extends Controller
{
    //
    public function liste_cantine(){
        return view('gerantCantine.liste');
    }

    public function ajouter_cantine(){
        return view('gerantCantine.ajouter');
    }
}
