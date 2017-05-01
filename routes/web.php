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
    return view('app.dashboard');
})->middleware('auth')->name('home');

Route::get('/rotinas', 'RotinasController@index')->name('rotinas.index');
Route::get('/rotinas/nova', 'RotinasController@nova')->name('rotinas.nova');
Route::post('rotinas/criar', 'RotinasController@criar')->name('rotinas.criar');
Route::get('/rotinas/atualiza/{id}', 'RotinasController@atualiza')->name('rotinas.atualiza');
Route::put('/rotinas/atualizar/{id}', 'RotinasController@atualizar')->name('rotinas.atualizar');


Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
