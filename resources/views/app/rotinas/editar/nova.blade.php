@extends('app.app')

@section('content')

<header class="section-header">
  <div class="tbl">
    <div class="tbl-row">
      <div class="tbl-cell">



        <h3>Nova rotina</h3>
        <ol class="breadcrumb breadcrumb-simple">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('rotinas.editar.nova') }}">Rotinas</a></li>
          <li class="active">Nova rotina</li>
        </ol>
      </div>
    </div>
  </div>
</header>

<section class="card">
  <div class="card-block">
  <form id="formValidate" action="{{ route('rotinas.criar') }}" novalidate="true" method="post">
  <div class="row">
  					<div class="col-lg-6">
  						<fieldset class="form-group">
  							<label class="form-label semibold" for="exampleInput">Nome da rotina</label>
  							<input type="text" class="form-control" id="exampleInput" placeholder="Digite o nome da rotina" name="nome">
  							<small class="text-muted">We'll never share your email with anyone else.</small>
  						</fieldset>
  					</div>
  					<div class="col-lg-6">
  						<fieldset class="form-group">
  							<label class="form-label semibold" for="exampleInputEmail1">Descrição da rotina</label>
  							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite uma breve descrição para a rotina" name="descricao">
                <small class="text-muted">We'll never share your email with anyone else.</small>
  						</fieldset>
  					</div>
            <input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Breve Descrição da Rotina" required="required" type="text" name="id_admin" value="1" style="display:none;">
            <input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Breve Descrição da Rotina" required="required" type="text" name="status" value="1" style="display:none;">
            {{ csrf_field() }}
            <div class="col-lg-12">
            <div class="form-group">
            <button type="submit" class="btn btn-inline pull-right">Criar rotina</button>
          </div>
        </div>


  				</div>
</form>
</div>
  </section>

@endsection
