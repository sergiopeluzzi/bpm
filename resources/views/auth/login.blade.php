<!DOCTYPE html>
<html>
<head>
  <title>Atarefado | A maneira mais simples e rápida de gerenciar as rotinas da sua empresa</title>
  <meta charset="utf-8">
  <meta content="ie=edge" http-equiv="x-ua-compatible">
  <meta content="pt-BR" name="keywords">
  <meta content="Rafael Mundel" name="author">
  <meta content="Atarefado | A maneira mais simples e rápida de gerenciar as rotinas da sua empresa" name="description">
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
</head>
  <body class="auth-wrapper">
    <div class="all-wrapper with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="/"><img alt="" src="{{ asset('app/img/logo_big.png') }}"></a>
        </div>
        <h4 class="auth-header">
          Login
        </h4>
        <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="">E-mail</label>
            <input id="email" type="email" class="form-control" name="email" placeholder="Enter your username" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control" placeholder="Enter your password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary">Entrar</button>
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Lembrar-me</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
