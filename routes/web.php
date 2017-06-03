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
  $tituloPagina = "Visão Geral";
  return view('app.index')->with('tituloPagina', $tituloPagina);
})->middleware('auth')->name('home');

Route::get('/rotinas', 'RotinasController@rotinasExecutar')->name('rotinas.index');
Route::get('/editar/rotinas', 'RotinasController@rotinasEditar')->name('rotinas.editar.index');
Route::get('/editar/rotinas/nova', 'RotinasController@nova')->name('rotinas.editar.nova');
Route::post('rotinas/criar', 'RotinasController@criar')->name('rotinas.criar');
Route::get('/rotinas/atualiza/{id}', 'RotinasController@atualiza')->name('rotinas.atualiza');
Route::put('/rotinas/atualizar/{id}', 'RotinasController@atualizar')->name('rotinas.atualizar');
Route::get('/editar/rotinas/{id}', 'RotinasController@tarefasEditar')->name('rotinas.editar.rotina');
Route::get('/editar/rotina/{id}/nova', 'RotinasController@novaTarefa')->name('tarefas.editar.nova');
Route::get('/editar/tarefas/ID', 'RotinasController@tarefaEditar')->name('tarefas.editar.index');
Route::post('/rotinas/{id}/tarefas/salvar', 'RotinasController@salvarNovaTarefa')->name('rotinas.salvar_nova_tarefa');

Route::get('/sair', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('sair');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
