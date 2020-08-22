<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"fundacionController@inicio");
Route::get('/inicio',"fundacionController@inicio");
Route::get('/loqueSomos',"fundacionController@loquesomos");
Route::get('/loqueHacemos',"fundacionController@loquehacemos");
Route::get('/proyectos',"fundacionController@proyectos");
Route::get('/loquelogramos',"fundacionController@loquelogramos");
Route::get('/Calendario',"fundacionController@calendario");
Route::get('/blog',"fundacionController@blog");
Route::get('/contactanos',"fundacionController@contactanos");
Route::get('/voluntariado',"fundacionController@voluntariado");
Route::get('/donaciones',"fundacionController@donaciones");

//Route::resource("posts","fundacionController");
