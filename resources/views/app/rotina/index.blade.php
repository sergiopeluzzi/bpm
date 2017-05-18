@extends('app.app')

@section('content')

<header class="section-header">
  <div class="tbl">
    <div class="tbl-row">
      <div class="tbl-cell">

        <h3>Nome da Rotina</h3>
        <ol class="breadcrumb breadcrumb-simple">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('rotinas.index') }}">Rotinas</a></li>
          <li><a href="">Nome da Rotina</a></li>
          <li class="active">Tarefas</li>
        </ol>
      </div>
      <div class="tbl-cell tbl-cell-action button">
    <a href="{{ route('rotina.novaTarefa', $data['idrotina'] )}}" class="btn btn-rounded btn-block">Nova tarefa</a>
  </div>
  <div class="tbl-cell tbl-cell-action button">
<a href="" class="btn btn-rounded btn-block btn-secondary"><span class="font-icon font-icon-cogwheel"></span></a>
</div>
    </div>
  </div>
</header>

<section class="box-typical">
    <header class="box-typical-header">
      <div class="tbl-row">
        <div class="tbl-cell tbl-cell-title">
          <h3>99 tarefas encontradas</h3>
        </div>
        <div class="tbl-cell tbl-cell-action-bordered">
          <button type="button" class="action-btn"><i class="font-icon font-icon-pencil"></i></button>
        </div>
        <div class="tbl-cell tbl-cell-action-bordered">
          <button type="button" class="action-btn"><i class="font-icon font-icon-re"></i></button>
        </div>
        <div class="tbl-cell tbl-cell-action-bordered">
          <button type="button" class="action-btn"><i class="font-icon font-icon-trash"></i></button>
        </div>
      </div>
    </header>
    <div class="box-typical-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="table-check">
                <div class="checkbox checkbox-only">
                  <input type="checkbox" id="table-check-head">
                  <label for="table-check-head"></label>
                </div>
              </th>
              <th>ID</th>
              <th>Nome da tarefa</th>
              <th>Descrição</th>
              <th class="table-icon-cell">
                <i class="font-icon font-icon-comments-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Requer validação para avançar"></i>
              </th>
              <th class="table-icon-cell">
                <i class="fa fa-ban" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tarefa obrigatória"></i>
              </th>
              <th class="table-icon-cell">
                <i class="font-icon font-icon-clock" data-toggle="tooltip" data-placement="top" title="" data-original-title="Data da última edição"></i>
              </th>
              <th class="table-icon-cell">
                <i class="font-icon font-icon-user" data-toggle="tooltip" data-placement="left" title="" data-original-title="Reponsável pela última edição"></i>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($data['tarefas'] as $d)
            <tr>
              <td class="table-check">
                <div class="checkbox checkbox-only">
                  <input type="checkbox" id="table-check-1">
                  <label for="table-check-1"></label>
                </div>
              </td>
              <td>
                {{ $d->id }}
              </td>
              <td>
                <a href="{{ route('rotinas.campos') }}">{{ $d->nome }}</a>
                <span class="hint-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Help">?</span>
              </td>
              <td class="color-blue-grey-lighter">  {{ $d->descricao }}</td>
              <td class="table-icon-cell">
                <i class="font-icon font-icon-del"></i>

              </td>
              <td class="table-icon-cell">
                <i class="font-icon font-icon-ok"></i>

              </td>
              <td class="table-date">6 minutes ago</td>
              <td class="table-photo">
                <img src="{{ asset('app/img/photo-64-1.jpg') }}" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div><!--.box-typical-body-->
  </section>

@endsection
