<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\rotina;

class RotinasController extends Controller
{
  public $rotinaDb;
  public function __construct(rotina $rotina){
      $this->rotinaDb = $rotina;
  }

  public function index()
  {
      $rotinaView = $this->rotinaDb->paginate(10);
      return view('app.rotinas.index')->with('rotinaView', $rotinaView);
  }

  public function nova(User $user) {

      return view('app.rotinas.nova')->with('users', $user->all());
  }

  public function criar(Request $request) {
      $rotinaCriar = $request->all();
      $this->rotinaDb->create($rotinaCriar);
      return redirect()->route('rotinas.index');
  }

  public function atualiza($id){
      $rotinaAtualiza = $this->rotinaDb->find($id);
      return view('app.rotinas.atualiza')->with('rotinaAtualiza', $rotinaAtualiza);
  }

  public function atualizar($id, Request $request){
      $dadosForm = $request->all();
      $rotinaAtualizar = $this->rotinaDb->find($id);
      $rotinaAtualizar->update($dadosForm);
      return redirect()->route('rotinas.index');
  }

  public function tarefas($id) {
      return view('app.rotinas.tarefas')->with('id', $id);
  }

  public function campos() {
      return view('app.rotinas.campos');
  }
}
