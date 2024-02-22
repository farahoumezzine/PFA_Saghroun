<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use Brian2694\Toastr\Facades\Toastr;

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

        Toastr::success('Successfully registered!', 'Success');
        return redirect('/childForm');
        //return redirect('/childForm')->with('message','Child added Successfully');


    }



}
