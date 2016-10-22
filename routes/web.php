<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|

/*Aqui hago Generacion de multiples rutas*/

Route::get('/', 'FontController@index');
Route::get('login','FontController@login');
Route::get('register','FontController@register');
Route::get('ayuda','FontController@ayuda');
Route::get('denuncias','FontController@denuncias');

/*Route::get('/', function () {
    return view('principal');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');
