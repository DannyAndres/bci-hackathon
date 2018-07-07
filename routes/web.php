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

Route::post('/normal-post', 'HomeController@normal-post')->name('normal-post');
Route::post('/empresa-post', 'HomeController@empresa-post')->name('empresa-post');
Route::post('/trabajador-post', 'HomeController@trabajador-post')->name('trabajador-post');