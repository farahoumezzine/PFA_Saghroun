<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cantine;
use App\Http\Controllers\RegisterChild;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RegisterTeacher;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/cantine",[Cantine::class,'liste_cantine'])->name("cantine");
Route::get("/ajouter",[Cantine::class,'ajouter_cantine']);

/*************************** Register CHILD *********************************/
Route::get("/childForm",[RegisterChild::class,'formschild'])->name('childForm');
Route::post("/ajouter/childForm",[RegisterChild::class,'formschild_ajouter'])->name('childForm.ajouter');

/*************************** Welcome *********************************/
Route::get("/welcome",[WelcomeController::class,'welcome']);
/*************************** Teacher *********************************/

/*************************** Register Teacher *********************************/
Route::get("/teacherForm", [RegisterTeacher::class, 'formsteacher'])->name('teacherForm');
Route::post("/ajouter/teacherForm", [RegisterTeacher::class, 'formsteacher_ajouter'])->name('teacherForm.ajouter');
/*************************** Login Teacher *********************************/
Route::get("/loginUser", [RegisterTeacher::class, 'login'])->name('login');
Route::post("/loginUser", [RegisterTeacher::class, 'loginpost'])->name('login');
/***************************   *********************************/
Route::group(['middleware' => 'auth'], function (){
    Route::get('/teacher',[TeacherController::class, 'teacher']);
    Route::delete("/logout", [RegisterTeacher::class, 'logoutpost'])->name('logout');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
