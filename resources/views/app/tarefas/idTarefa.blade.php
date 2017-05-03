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
            <span href="newtask.html">Processo de Locação</span>
          </li>
        </ul>
        <div class="content-i">
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <h6 class="element-header">
                                      Processo de Locação
                                    </h6>
                  <div class="element-box">
                    <form id="formValidate" action="{{ route('tarefas.idPassoDaTarefa') }}" novalidate="true">
                      <h5 class="form-header">
                                            Recepcionar Cliente
                                          </h5>
                      <div class="form-desc">
                        Breve descrição sobre a tarefa recepcionar clientes. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Manual da tarefa</a>
                        <div class="element-actions">
                          <div class="el-buttons-list full-width">
                            <a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-user-male-circle"></i><span>Fulano de Tal</span></a>
                          </div>
                        </div>
                      </div>
                      <row>
                        <div class="form-buttons">
                          <button class="btn btn-primary" type="submit">Iniciar</button>
                        </div>
                      </row>
                    </form>
                  </div>
                  <div class="element-box">
                    <form id="formValidate" action="#">
                      <h5 class="form-header">
                                            Identificar Necessidades
                                          </h5>
                      <div class="form-desc">
                        Breve descrição sobre a tarefa identificar necessidades. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Manual da tarefa</a>
                      </div>
                      <row>
                        <div class="form-buttons">
                          <button class="btn btn-primary disabled" type="submit">Iniciar</button>
                        </div>
                      </row>
                    </form>
                  </div>
                  <div class="element-box">
                    <form id="formValidate" action="#">
                      <h5 class="form-header">
                                            Visitar Imóvel
                                          </h5>
                      <div class="form-desc">
                        Breve descrição sobre a tarefa recepcionar clientes. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Manual de Recepção de Clientes</a>
                      </div>
                      <row>
                        <div class="form-buttons">
                          <button class="btn btn-primary disabled" type="submit">Iniciar</button>
                        </div>
                      </row>
                    </form>
                  </div>
                  <div class="element-box">
                    <form id="formValidate" action="#">
                      <h5 class="form-header">
                                              Negociar Locação
                                          </h5>
                      <div class="form-desc">
                        Breve descrição sobre a tarefa recepcionar clientes. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Manual de Recepção de Clientes</a>
                      </div>
                      <row>
                        <div class="form-buttons">
                          <button class="btn btn-primary disabled" type="submit">Iniciar</button>
                        </div>
                      </row>
                    </form>
                  </div>
                  <div class="element-box">
                    <form id="formValidate" action="#">
                      <h5 class="form-header">
                                            Solicitar Documentações
                                          </h5>
                      <div class="form-desc">
                        Breve descrição sobre a tarefa recepcionar clientes. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Manual de Recepção de Clientes</a>
                      </div>
                      <row>
                        <div class="form-buttons">
                          <button class="btn btn-primary disabled" type="submit">Iniciar</button>
                        </div>
                      </row>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
