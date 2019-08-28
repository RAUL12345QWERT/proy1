<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('controlador', 'PruebaController@index');
Route::get('name/{nombre}', 'PruebaController@nombre');

Route::resource('movie', 'MovieController');

Route::get('prueba', function () {
    return "Hola desde routers.php";
});

Route::get('nombre/{nombre}', function ($nombre) {
    return "Hola, mi nombre es: ".$nombre;
});

Route::get('edad/{nombre?}', function ($edad = 20) {
    return "Hola, mi edad es: ".$edad;
});


Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');
*/

Route::resource('usuario', 'UsuarioController');
Route::resource('genero', 'GeneroController');
Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');
Route::get('/', function () {
    return view('index');
});