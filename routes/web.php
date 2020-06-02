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

Route::get('/', function () {
    return view('welcome');
});

Route::get('upload','controladorBD@create')->name('image.create'); //Se necesita agregar controlador para verificar que tenga sesión iniciada antes.

Auth::routes();

Route::get('home','controladorBD@index')->name('home.index');

Route::post('imagenes', 'controladorBD@store')->name('imagenes.store');
