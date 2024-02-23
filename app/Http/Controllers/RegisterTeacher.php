<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RegisterTeacher extends Controller
{
   public function formsteacher ()
   {
       return view('Teacher.form');
   }
   public function formsteacher_ajouter(Request $request)
   {
       $request->validate([ 'nic'=>'required',
           'firstname'=>'required',
           'lastname'=>'required',
           'phone'=>'required',
           'address'=>'required',
           'email'=>'required',
           'dateofbirth'=>'required',
           'gender'=>'required',
           'status'=>'required',
           'type_degree'=>'required',
           'languages'=>'required',
           'filename'=>'required',
           'imagename'=>'required',

       ]);
       $teacher = new Teacher();
       /****** Child Information ******/
       $teacher->nic=$request->nic;
       $teacher->firstname=$request->firstname;
       $teacher->lastname=$request->lastname;
       $teacher->phone=$request->phone;
       $teacher->address=$request->address;
       $teacher->email=$request->email;
       $teacher->dateofbirth=$request->dateofbirth;
       $teacher->gender=$request->gender;
       $teacher->status=$request->status;
       $teacher->type_degree=$request->type_degree;
       $teacher->languages = json_encode($request->languages);
       $teacher->filename=$request->filename;
       $teacher->imagename=$request->imagename;
       $teacher->save();

       Toastr::success('Teacher Successfully registered!', 'Success',["positionClass" => "toast-top-center"]);
       return redirect('/teacherForm');
   }
}
