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
Route::get('/rotinas/{id}/tarefas', 'RotinasController@tarefas')->name('rotinas.tarefas');
Route::get('/rotinas/tarefas/campos', 'RotinasController@campos')->name('rotinas.campos');
Route::get('/rotinas/{id}/tarefas/nova', 'RotinasController@novaTarefa')->name('rotinas.tarefa_nova');
Route::post('/rotinas/{id}/tarefas/salvar', 'RotinasController@salvarNovaTarefa')->name('rotinas.salvar_nova_tarefa');

Route::get('/tarefas', 'TarefasController@index')->name('tarefas.index');
Route::get('/tarefas/nova', 'TarefasController@nova')->name('tarefas.nova');
Route::get('/tarefas/idTarefa', 'TarefasController@idTarefa')->name('tarefas.idTarefa');
Route::get('/tarefas/idPassoDaTarefa', 'TarefasController@idPassoDaTarefa')->name('tarefas.idPassoDaTarefa');

Route::get('/relatorios', 'RelatoriosController@index')->name('relatorios.index');


Route::get('/sair', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('sair');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
