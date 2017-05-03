<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.tarefas.index');
    }

    public function nova()
    {
        return view('app.tarefas.nova');
    }

    public function idTarefa()
    {
        return view('app.tarefas.idTarefa');
    }
    public function idPassoDaTarefa()
    {
        return view('app.tarefas.idPassoDaTarefa');
    }
}
