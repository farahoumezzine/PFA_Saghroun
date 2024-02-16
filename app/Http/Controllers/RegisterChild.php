<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class RegisterChild extends Controller
{
    //
    public function formschild(){
        return view('child.form');
    }

    public function formschild_ajouter(Request $request){

        $request->validate(['firstname'=>'required',
            'lastname'=>'required',
            'dateofbirth'=>'required',
            //'activities[]'=>'required',
            'filename'=>'required',
            'gender'=>'required',
        ]);
     $child =new Child();
        $child->firstname=$request->firstname;

        $child->lastname=$request->lastname;
        $child->dateofbirth=$request->dateofbirth;
        //$child->activities[]=$request->activities[];
        $child->filename=$request->filename;
        $child->gender=$request->gender;
        $child->save();
        return redirect('/childForm')->with('status','child bien ajouté avec succée');


    }



}
