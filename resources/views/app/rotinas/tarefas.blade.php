@extends('app.app')

@section('content')

<header class="section-header">
  <div class="tbl">
    <div class="tbl-row">
      <div class="tbl-cell">

          <a href="{{ route('rotinas.tarefa_nova', $data['idrotina'] )}}" class="btn btn-rounded btn-inline" style="position: fixed; margin-top:100px; top: 0px; right: 20px; z-index: 99;">
            Nova tarefa
          </a>

        <h3>Tarefas</h3>
        <ol class="breadcrumb breadcrumb-simple">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('rotinas.index') }}">Rotinas</a></li>
          <li><a href="">Nome da Rotina</a></li>
          <li class="active">Tarefas</li>
        </ol>
      </div>
    </div>
  </div>
</header>

<section class="box-typical">
    <header class="box-typical-header">
      <div class="tbl-row">
        <div class="tbl-cell tbl-cell-title">
          <h3>99 rotinas encontradas</h3>
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
              <th>Nome da rotina</th>
              <th>Descrição</th>
              <th class="table-icon-cell">
                <i class="font-icon font-icon-heart"></i>
              </th>
              <th class="table-icon-cell">
                <i class="font-icon font-icon-comment"></i>
              </th>
              <th>Criado em</th>
              <th></th>
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
                <a href="">{{ $d->nome }}</a>
                <span class="hint-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Help">?</span>
              </td>
              <td class="color-blue-grey-lighter">  {{ $d->descricao }}</td>
              <td class="table-icon-cell">
                <i class="font-icon font-icon-heart"></i>

              </td>
              <td class="table-icon-cell">
                <i class="font-icon font-icon-comment"></i>
                
              </td>
              <td class="table-date">6 minutes ago <i class="font-icon font-icon-clock"></i></td>
              <td class="table-photo">
                <img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div><!--.box-typical-body-->
  </section>

@endsection
