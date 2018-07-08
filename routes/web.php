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
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/normal', 'HomeController@normal')->name('normal');
Route::get('/empresa', 'HomeController@empresa')->name('empresa');
Route::get('/trabajador', 'HomeController@trabajador')->name('trabajador');

Route::post('/normal-post', 'HomeController@normal_post')->name('normal-post');
Route::post('/empresa-post', 'HomeController@empresa_post')->name('empresa-post');
Route::post('/trabajador-post', 'HomeController@trabajador_post')->name('trabajador-post');

Route::get('/empresa/{slug}', 'HomeController@perfilEmpresa');

Route::get('/administrador','HomeController@admin')->name('administrador');

Route::post('/trabajador-aceptar', 'HomeController@trabajador_aceptar')->name('trabajador-aceptar');
Route::post('/trabajador-rechazar', 'HomeController@trabajador_rechazar')->name('trabajador-rechazar');