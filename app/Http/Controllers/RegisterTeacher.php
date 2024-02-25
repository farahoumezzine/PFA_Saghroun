<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
class RegisterTeacher extends Controller
{
   public function formsteacher ()
   {
       return view('Teacher.form');
   }
   public function formsteacher_ajouter(Request $request)
   {
       $request->validate([
           'nic' => 'required',
           'firstname' => 'required',
           'lastname' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'email' => 'required|email|unique:teachers',
           'dateofbirth' => 'required|date',
           'password' => 'required|min:4',
           'confirmpassword' => 'required|same:password',
           'gender' => 'required',
           'status' => 'required',
           'type_degree' => 'required',
           'languages' => 'required',
           'filename' => 'required',
           'imagename' => 'required',
       ]);
       $teacher = new Teacher();
       /****** Teacher Information ******/
       $teacher->nic=$request->nic;
       $teacher->firstname=$request->firstname;
       $teacher->lastname=$request->lastname;
       $teacher->phone=$request->phone;
       $teacher->address=$request->address;
       $teacher->email=$request->email;
       $teacher->dateofbirth=$request->dateofbirth;
       $teacher->password=$request->password;
       $teacher->confirmpassword=$request->confirmpassword;
       $teacher->gender=$request->gender;
       $teacher->status=$request->status;
       $teacher->type_degree=$request->type_degree;
       $teacher->languages = json_encode($request->languages);
       $teacher->filename=$request->filename;
       $teacher->imagename=$request->imagename;
       $teacher->password = Hash::make($request->password);
       $teacher->confirmpassword = Hash::make($request->confirmpassword);
       $teacher->save();
       Toastr::success('Teacher Successfully registered!', 'Success',["positionClass" => "toast-top-center"]);
       return redirect('/loginUser');
   }
    /*************************** Login  *********************************/
    public function login ()
    {
        return view('login.loginWelcome');
    }
    public function loginpost(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Toastr::success('Successful login!', 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->intended('teacher');
        }
        Toastr::error('Incorrect identifiers!!!!', 'Error', ["positionClass" => "toast-top-center"]);
        return back()->withErrors([
            'email' => 'The credentials provided do not match our records.',
        ])->withInput($request->only('email'));
    }
    /*************************** LogOut  *********************************/
    public function logoutpost(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginUser');
    }


}
