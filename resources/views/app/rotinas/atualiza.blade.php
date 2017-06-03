@extends('app.layouts.master')

@section('content')

        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.html">Início</a>
          </li>
          <li class="breadcrumb-item">
            <a href="routines.html">Rotinas</a>
          </li>
          <li class="breadcrumb-item">
            <span href="new_routine.html">Nova Rotina</span>
          </li>
        </ul>
        <div class="content-i">
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <h6 class="element-header">
                                      Nova Rotina
                                    </h6>
                  <div class="element-box">
                    {!! Form::model($rotinaAtualiza, ['route' => ['rotinas.atualizar', $rotinaAtualiza->id], 'method' => 'put'], ['id' => 'formValidate']) !!}
                      <div class="form-group ">
                        <label for=""> Nome da rotina</label>
                        {!! Form::text('nome', null, ['class' => 'form-control', 'data-error' => 'Por favor digite um nome para a rotina', 'placeholder' => 'Nome da Rotina', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group ">
                        <label for=""> Descrição</label>
                        {!! Form::text('descricao', null, ['class' => 'form-control', 'data-error' => 'Por favor digite um nome para a rotina', 'placeholder' => 'Nome da Rotina', 'required' => 'required']) !!}
                      </div>

                      <div class="form-group ">
                        <label for=""> ID Admin</label>
                        {!! Form::text('id_admin', null, ['class' => 'form-control', 'data-error' => 'Por favor digite um nome para a rotina', 'placeholder' => 'Nome da Rotina', 'required' => 'required']) !!}

                      </div>

                      <div class="form-group ">
                        <label for="">Status</label>
                        {!! Form::text('status', null, ['class' => 'form-control', 'data-error' => 'Por favor digite um nome para a rotina', 'placeholder' => 'Nome da Rotina', 'required' => 'required']) !!}

                      </div>
                      {{ csrf_field() }}
                      <div class="form-buttons-w">
                        {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
                      </div>
                      {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
