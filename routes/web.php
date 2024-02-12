<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cantine;
use App\Http\Controllers\RegisterChild;
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
Route::get("/childForm",[RegisterChild::class,'formschild']);
