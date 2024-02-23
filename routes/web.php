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
Route::get('/teacher',[TeacherController::class, 'teacher']);
/*************************** Register Teacher *********************************/
Route::get("/teacherForm", [RegisterTeacher::class, 'formsteacher'])->name('teacherForm');
Route::post("/ajouter/teacherForm", [RegisterTeacher::class, 'formsteacher_ajouter'])->name('teacherForm.ajouter');

