<?php

namespace App\Http\Controllers;

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

  public function nova() {
      return view('app.rotinas.nova');
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
}
