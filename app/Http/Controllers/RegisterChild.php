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

       // dd($request->all());
        $request->validate(['firstname'=>'required',
            'lastname'=>'required',
            'dateofbirth'=>'required',
            'filename'=>'required',
            'gender'=>'required',
            'activities'=>'required',
        ]);
     $child =new Child();
        /****** Child Information ******/

        $child->firstname=$request->firstname;
        $child->lastname=$request->lastname;
        $child->dateofbirth=$request->dateofbirth;
        $child->filename=$request->filename;
        $child->gender=$request->gender;

        $child->activities = json_encode($request->activities);

        /****** Additional Information ******/
        $child->allergies=$request->allergies;
        $child->conditions=$request->conditions;
        $child->message=$request->message;

        $child->save();
        return redirect('/childForm')->with('status','child bien ajouté avec succée');


    }



}
