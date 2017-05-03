@extends('app.app')

@section('content')


                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.html">Início</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="mytasks.html">Tarefas</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="mytasks.html">Processo de Locação</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span href="newtask.html">Recepcionar Cliente</span>
                    </li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">
                                      Recepcionar Cliente
                                    </h6>
                                    <div class="element-box">
                                        <form id="formValidate" novalidate="true">

                                            <div class="form-group">
                                                <label for="">Nome completo</label><input class="form-control" data-error="Please input your First Name" placeholder="Nome completo" required="required" type="text">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>

                                            <div class="form-group">
                                                <label for=""> Email</label><input class="form-control" data-error="O endereço de email é inválido" placeholder="Email" required="required" type="email">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""> Senha</label><input class="form-control" data-minlength="6" placeholder="Senha" required="required" type="password">
                                                        <div class="help-block form-text text-muted form-control-feedback">
                                                            Mínimo de 6 caracteres
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Confirme a senha</label><input class="form-control" data-match-error="Senhas não conferem" placeholder="Confirme a senha" required="required" type="password">
                                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary disabled" type="submit"> Próxima etapa</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
