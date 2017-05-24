@extends('app.app')

@section('styles')

@endsection

@section('content')

<header class="section-header">
  <div class="tbl">
    <div class="tbl-row">
      <div class="tbl-cell">
        <h3>Rotinas</h3>
        <ol class="breadcrumb breadcrumb-simple">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">Rotinas</li>
        </ol>
      </div>
      <div class="tbl-cell tbl-cell-action button">
    <a href="" class="btn btn-rounded btn-block">Nova rotina</a>
  </div>
  <div class="tbl-cell tbl-cell-action button">
<a href="{{ route('rotinas.editar.index') }}" class="btn btn-rounded btn-block btn-secondary"><span class="font-icon font-icon-cogwheel"></span></a>
</div>
    </div>
  </div>
</header>

<section class="box-typical">

  </section>


@endsection

@section('scripts')

@endsection
