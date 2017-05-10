@extends('app.app')

@section('content')


<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="dashboard.html">Início</a>
  </li>
  <li class="breadcrumb-item">
    <span href="routines.html">Rotinas</span>
  </li>
  <li class="breadcrumb-item">
    <span href="routines.html">Nome da Rotina</span>
  </li>
</ul>
<div class="content-i">
  <div class="content-box">
    <div class="row">
      <div class="col-sm-12">
        <div class="element-wrapper">
          <div class="element-actions">
            <div class="el-buttons-list full-width">
              <a class="btn btn-white btn-sm" href="{{ route('rotinas.tarefa_nova', $id )}}"><i class="os-icon os-icon-delivery-box-2"></i><span>Nova tarefa</span></a>
            </div>
          </div>
          <h6 class="element-header">
                              Nome da Rotina
                            </h6>
          <div class="element-box">
            <h6 class="element-header">
                      Tarefas da Rotina
                    </h6>
            <div class="controls-above-table">
              <div class="row">
                <div class="col-sm-6">
                  <a class="btn btn-sm btn-success" href="#">Habilitar</a><a class="btn btn-sm btn-warning" href="#">Desabilitar</a><a class="btn btn-sm btn-danger" href="#">Excluir</a>
                  <a class="btn btn-sm btn-secondary" href="#">Imprimir</a>
                </div>
                <div class="col-sm-6">
                  <form class="form-inline justify-content-sm-end">
                    <input class="form-control form-control-sm rounded bright" placeholder="Pesquisar" type="text"><select class="form-control form-control-sm rounded bright">
                      <option selected="selected" value="">
                        Filtrar por Status
                      </option>
                      <option value="Pending">
                        Habilitado
                      </option>
                      <option value="Active">
                        Desabilitado
                      </option>
                      <option value="Active">
                        Excluido
                      </option>
                    </select>
                  </form>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-lg table-v2 table-striped">
                <thead>
                  <tr>
                    <th class="text-center">
                      <input class="form-control" type="checkbox">
                    </th>
                    <th>
                      ID
                    </th>
                    <th>
                      Nome da Tarefa
                    </th>
                    <th>
                      Descrição
                    </th>
                    <th>
                      Responsável
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Ações
                    </th>
                  </tr>
                </thead>
                <tbody>
                                            <tr>
                    <td class="text-center">
                      <input class="form-control" type="checkbox">
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      <a href="http://localhost:8000/rotinas/1/tarefas">Rotina de Teste</a>
                    </td>
                    <td>
                      Descrição
                    </td>
                    <td class="text-right">
                      1
                    </td>
                    <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                  </td>
                    <td class="row-actions">
                      <a href="http://localhost:8000/rotinas/atualiza/1"><i class="os-icon os-icon-pencil-2"></i></a>
                    </td>
                  </tr>
                                          </tbody>
              </table>
            </div>

            <div class="controls-below-table">

              <div class="table-records-info">

              </div>
              <div class="table-records-pages">

                <ul>



                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
