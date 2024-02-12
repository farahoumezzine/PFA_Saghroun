<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterChild extends Controller
{
    //
    public function formschild(){
        return view('child.form');
    }
}
