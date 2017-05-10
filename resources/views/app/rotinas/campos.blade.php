@extends('app.app')

@section('content')

<div class="content-w">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.html">Início</a>
          </li>
          <li class="breadcrumb-item">
            <a href="routines.html">Rotinas</a>
          </li>
          <li class="breadcrumb-item">
            <a href="routines.html">Nome da Rotina</a>
          </li>
          <li class="breadcrumb-item">
            <a href="routine.html">Nome da Tarefa</a>
          </li>
          <li class="breadcrumb-item">
            <span href="routine.html">Campos da Tarefa</span>
          </li>
        </ul>
        <div class="content-i">
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <div class="element-actions">
                    <div class="el-buttons-list full-width">
                      <a class="btn btn-white btn-sm" href="edit_task.html"><i class="os-icon os-icon-pencil-2"></i><span>Configurações</span></a>
                    </div>
                  </div>
                  <h6 class="element-header">
                    Campos da Tarefa
                  </h6>
                  <div class="element-box">
                    <div id="build-wrap"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('form_builder')
  <script src="{{ asset('app/assets/js/vendor.min.js') }}"></script>
  <script src="{{ asset('app/assets/js/form-builder.min.js') }}"></script>
  <script src="{{ asset('app/assets/js/form-render.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.js"></script>
  <script src="{{ asset('app/assets/js/demo.js') }}"></script>
@endsection
