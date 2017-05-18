<?php

namespace App\Http\Controllers;

use App\rotinaTarefas;
use App\tarefa;
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
      $data['tituloPagina'] = "Rotinas";
      $data['rotinaView'] = $this->rotinaDb->paginate(10);
      return view('app.rotinas.index')->with($data);
  }

  public function nova(User $user) {
      $tituloPagina = "Rotinas";
      return view('app.rotinas.novaRotina')->with('users', $user->all())->with('tituloPagina', $tituloPagina);
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

  public function tarefas($id, tarefa $tarefas, rotinaTarefas $rotinaTarefas) {
      $tituloPagina = "Rotinas";
      $rt = $rotinaTarefas->where('rotina_id', $id);

      foreach ($rt->get()->all() as $r) {
          $tarefa[] = $r->tarefa_id;
      }



      $data = [
          'idrotina' => $id,
          'tarefas' => $tarefas->all(),

      ];

      return view('app.rotinas.tarefas')->with('data', $data)->with('tituloPagina', $tituloPagina);
  }

  public function campos() {
      $tituloPagina = "Rotinas";
      return view('app.rotinas.campos')->with('tituloPagina', $tituloPagina);
  }

  public function novaTarefa($id) {
      $tituloPagina = "Rotinas";
      return view('app.rotina.novaTarefa')->with('idrotina', $id)->with('tituloPagina', $tituloPagina);
  }


  public function salvarNovaTarefa($id, tarefa $tarefa, rotinaTarefas $rotinaTarefas, Request $request) {

      $t = $tarefa->create($request->all());

      $dadosForm = [
          'rotina_id' => $id,
          'tarefa_id' => $t->id
      ];

      $rotinaTarefas->create($dadosForm);

      $data = [
          'idrotina' => $id,
          'tarefas' => $tarefa->all(),

      ];

      return redirect()->route('rotina.index', $id)->with('data', $data);

  }

  public function rotinaExecuta() {
      $tituloPagina = "Rotinas";
      return view('app.rotinas.executa')->with('tituloPagina', $tituloPagina);
  }
}
