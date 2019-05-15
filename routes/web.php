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

Route::get('carros', 'CarroController@index')->name('carros.index');
Route::get('carros/crear', 'CarroController@create')->name('carros.create');
Route::post('carros/crear', 'CarroController@store')->name('carros.store');

Route::get('carros/{carro}', 'CarroController@show')->name('carros.show');

Route::get('carros/{carro}/editar', 'CarroController@edit')->name('carros.edit');

Route::put('carros/{carro}/editar', 'CarroController@update')->name('carros.update');
Route::delete('carros/{carro}', 'CarroController@destroy')->name('carros.destroy'); 