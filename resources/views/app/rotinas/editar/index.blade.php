@extends('app.app')

@section('styles')

@endsection

@section('content')

<header class="section-header">
  <div class="tbl">
    <div class="tbl-row">
      <div class="tbl-cell">
        <h3>Editar Rotinas</h3>
        <ol class="breadcrumb breadcrumb-simple">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">Editar Rotinas</li>
        </ol>
      </div>
      <div class="tbl-cell tbl-cell-action button">
    <a href="{{ route('rotinas.editar.nova') }}" class="btn btn-rounded btn-block">Nova rotina</a>
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
                <i class="font-icon font-icon-view-rows" data-toggle="tooltip" data-placement="top" title="" data-original-title="Total de execuções da rotina"></i>
              </th>
              <th class="table-icon-cell">
                <i class="font-icon font-icon-users" data-toggle="tooltip" data-placement="top" title="" data-original-title="Usuários com permissão de executar"></i>
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
            @foreach ($rotinaView as $r)
            <tr>
              <td class="table-check">
                <div class="checkbox checkbox-only">
                  <input type="checkbox" id="table-check-1">
                  <label for="table-check-1"></label>
                </div>
              </td>
              <td>
                {{ $r->id }}
              </td>
              <td>
                <a href="{{ route('rotina.editar.index', $r->id) }}">{{ $r->nome }}</a>
                <span class="hint-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Help">?</span>
              </td>
              <td class="color-blue-grey-lighter">  {{ $r->descricao }}</td>
              <td class="table-icon-cell">
                <i class="font-icon font-icon-view-rows"></i>
                {{ $r->id_admin }}
              </td>
              <td class="table-icon-cell">
                <i class="font-icon font-icon-users"></i>
                {{ $r->status }}
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
      <nav class="pull-right">
        {{ $rotinaView->links() }}
      </nav>
    </div><!--.box-typical-body-->
  </section>


@endsection

@section('scripts')

@endsection
