@extends('app.app')

@section('content')

<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="dashboard.html">Início</a>
  </li>
  <li class="breadcrumb-item">
    <a href="routines.html">Rotinas</a>
  </li>
  <li class="breadcrumb-item">
    <a href="routines.html">Nova da Rotina</a>
  </li>
  <li class="breadcrumb-item">
    <span href="new_routine.html">Nova Tarefa</span>
  </li>
</ul>
<div class="content-i">
  <div class="content-box">
    <div class="row">
      <div class="col-sm-12">
        <div class="element-wrapper">
          <h6 class="element-header">
                              Nova Tarefa
                            </h6>
          <div class="element-box">
            <form id="formValidate" action="" novalidate="true" method="post">

              <div class="form-group ">
                <label for=""> Nome da tarefa</label>
                <input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Nome da Rotina" required="required" type="text" name="nome">

              </div>
              <div class="form-group ">
                <label for=""> Descrição</label>
                <input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Breve Descrição da Rotina" required="required" type="text" name="descricao">

              </div>

              {{ csrf_field() }}
              <div class="form-buttons-w">
                <button class="btn btn-primary disabled" type="submit">Criar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
