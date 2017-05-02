<!DOCTYPE html>
<html>

<head>
  <title>Workflow</title>
  <meta charset="utf-8">
  <meta content="ie=edge" http-equiv="x-ua-compatible">
  <meta content="template language" name="keywords">
  <meta content="Tamerlan Soziev" name="author">
  <meta content="Admin dashboard html template" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="{{ asset('app/favicon.png') }}" rel="shortcut icon">
  <link href="{{ asset('app/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('app/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('app/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('app/bower_components/dropzone/dist/dropzone.css" rel="stylesheet') }}">
  <link href="{{ asset('app/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('app/bower_components/datatables/media/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('app/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
  <link href="{{ asset('app/css/main.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('app/assets/css/form-builder.css') }}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('app/assets/css/form-render.css') }}">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.css">

</head>

<body>
  <div class="all-wrapper">
    <div class="layout-w">
      <div class="menu-w menu-activated-on-click">
        <div class="logo-w">
          <a class="logo" href="{{ route('home') }}"><img src="img/logo.png"><span>Workflow</span></a>
          <div class="mobile-menu-trigger">
            <div class="os-icon os-icon-hamburger-menu-1"></div>
          </div>
        </div>
        <div class="menu-and-user">
          <div class="logged-user-w">
            <div class="avatar-w">
              <img alt="" src="img/avatar1.jpg">
            </div>
            <div class="logged-user-info-w">
              <div class="logged-user-name">
                João da Silva
              </div>
              <div class="logged-user-role">
                Administrador
              </div>
            </div>
          </div>
          <ul class="main-menu">
            <li>
              <a href="{{ route('home') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-window-content"></div>
                </div>
                <span>Visão Geral</span></a>
            </li>
            <li>
              <a href="{{ route('tarefas.index') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-pencil-1"></div>
                </div>
                <span>Minhas Tarefas</span></a>
            </li>
            <li>
              <a href="{{ route('rotinas.index') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-donut-chart-2"></div>
                </div>
                <span>Rotinas</span></a>
            </li>
            <li class="has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-user-male-circle"></div>
                </div>
                <span>Permissões</span></a>
              <ul class="sub-menu">
                <li>
                  <a href="forms.html">Grupos</a>
                </li>
                <li>
                  <a href="forms_validation.html">Usuários</a>
                </li>
              </ul>
            </li>
            <li class="has-sub-menu">
              <a href="{{ route('relatorios.index') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-newspaper"></div>
                </div>
                <span>Relatórios</span></a>
              <ul class="sub-menu">
                <li>
                  <a href="tables.html">Por rotina</a>
                </li>
                <li>
                  <a href="tables_data.html">Por tarefa</a>
                </li>
                <li>
                  <a href="tables_editable.html">Por usuário</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="calendar.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-arrow-right"></div>
                </div>
                <span>Logout</span></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content-w">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="{{ asset('app/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('app/bower_components/moment/moment.js') }}"></script>
  <script src="{{ asset('app/bower_components/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('app/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('app/bower_components/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('app/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
  <script src="{{ asset('app/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('app/bower_components/dropzone/dist/dropzone.js') }}"></script>
  <script src="{{ asset('app/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
  <script src="{{ asset('app/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('app/bower_components/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('app/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('app/js/main.js') }}"></script>

  <script src="{{ asset('app/assets/js/vendor.min.js') }}"></script>
  <script src="{{ asset('app/assets/js/form-builder.min.js') }}"></script>
  <script src="{{ asset('app/assets/js/form-render.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.1/jquery.rateyo.min.js"></script>
  <script src="{{ asset('app/assets/js/demo.js') }}"></script>

</body>

</html>
