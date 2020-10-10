<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ingresoDinero', 'FlujoController@IngresoDeDinero')->name('Ingreso');
Route::post('/egresoDinero', 'FlujoController@EgresoDeDinero')->name('Egreso');