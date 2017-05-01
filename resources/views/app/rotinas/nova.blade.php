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
                    <form id="formValidate" action="{{ route('rotinas.criar') }}" novalidate="true" method="post">

                      <div class="form-group ">
                        <label for=""> Nome da rotina</label><input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Nome da Rotina" required="required" type="text" name="nome">

                      </div>
                      <div class="form-group ">
                        <label for=""> Descrição</label><input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Breve Descrição da Rotina" required="required" type="text" name="descricao">

                      </div>

                      <div class="form-group ">
                        <label for=""> ID Admin</label><input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Breve Descrição da Rotina" required="required" type="text" name="id_admin" value="1">

                      </div>

                      <div class="form-group ">
                        <label for="">Status</label><input class="form-control" data-error="Por favor digite um nome para a rotina" placeholder="Breve Descrição da Rotina" required="required" type="text" name="status" value="1">

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
