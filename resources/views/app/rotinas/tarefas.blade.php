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
            <span href="routine.html">Nome da Rotina</span>
          </li>
        </ul>
        <div class="content-i">
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <div class="element-actions">
                    <div class="el-buttons-list full-width">
                      <a class="btn btn-white btn-sm" href="routine.html"><i class="os-icon os-icon-pencil-2"></i><span>Editar Rotina</span></a>
                    </div>
                  </div>
                  <h6 class="element-header">
                    Nome da Rotina
                  </h6>
                  <div class="element-box">
                    <form id="formValidate" action="{{ route('rotinas.campos') }}" novalidate="true">
                      <h5 class="form-header">
                        Nova Tarefa
                      </h5>
                      <div class="form-desc">
                        Breve descrição sobre a tarefa recepcionar clientes. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Manual da tarefa</a>
                      </div>
                      <div class="form-group">
                        <label for="">Nome da Tarefa</label><input class="form-control" placeholder="Nome da Tarefa" type="text">
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="">Permissão de leitura</label><input class="form-control" placeholder="Grupos ou usuários com permissão para ler esta tarefa" type="text">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="">Permissão de escrita</label><input class="form-control" placeholder="Grupos ou usuários com permissão para utilizar esta tarefa" type="text">
                          </div>
                        </div>
                      </div>

                      <row>
                        <div class="form-buttons">
                          <button class="btn btn-primary" type="submit">Adicionar tarefa</button>
                        </div>
                      </row>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <h6 class="element-header">
                  Tarefas da Rotina
                </h6>
                  <div class="element-box-tp">
                    <div class="controls-above-table">
                      <div class="row">
                        <div class="col-sm-6">
                          <a class="btn btn-sm btn-secondary" href="#">Download CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </div>
                        <div class="col-sm-6">
                          <form class="form-inline justify-content-sm-end">
                            <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                            <option selected="selected" value="">
                              Select Status
                            </option>
                            <option value="Pending">
                              Pending
                            </option>
                            <option value="Active">
                              Active
                            </option>
                            <option value="Cancelled">
                              Cancelled
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
                              Customer Name
                            </th>
                            <th>
                              Country
                            </th>
                            <th>
                              Order Total
                            </th>
                            <th>
                              Referral
                            </th>
                            <th>
                              Status
                            </th>
                            <th>
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">
                              <input class="form-control" type="checkbox">
                            </td>
                            <td>
                              John Mayers
                            </td>
                            <td>
                              <img alt="" src="img/flags-icons/us.png" width="25px">
                            </td>
                            <td class="text-right">
                              $245
                            </td>
                            <td>
                              Organic
                            </td>
                            <td class="text-center">
                              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                            </td>
                            <td class="row-actions">
                              <a href="edit_task.html"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <input class="form-control" type="checkbox">
                            </td>
                            <td>
                              Mike Astone
                            </td>
                            <td>
                              <img alt="" src="img/flags-icons/fr.png" width="25px">
                            </td>
                            <td class="text-right">
                              $154
                            </td>
                            <td>
                              Organic
                            </td>
                            <td class="text-center">
                              <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                            </td>
                            <td class="row-actions">
                              <a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <input class="form-control" type="checkbox">
                            </td>
                            <td>
                              Kira Knight
                            </td>
                            <td>
                              <img alt="" src="img/flags-icons/us.png" width="25px">
                            </td>
                            <td class="text-right">
                              $23
                            </td>
                            <td>
                              Adwords
                            </td>
                            <td class="text-center">
                              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                            </td>
                            <td class="row-actions">
                              <a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <input class="form-control" type="checkbox">
                            </td>
                            <td>
                              Jessica Bloom
                            </td>
                            <td>
                              <img alt="" src="img/flags-icons/ca.png" width="25px">
                            </td>
                            <td class="text-right">
                              $112
                            </td>
                            <td>
                              Organic
                            </td>
                            <td class="text-center">
                              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                            </td>
                            <td class="row-actions">
                              <a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <input class="form-control" type="checkbox">
                            </td>
                            <td>
                              Gary Lineker
                            </td>
                            <td>
                              <img alt="" src="img/flags-icons/ca.png" width="25px">
                            </td>
                            <td class="text-right">
                              $64
                            </td>
                            <td>
                              Organic
                            </td>
                            <td class="text-center">
                              <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                            </td>
                            <td class="row-actions">
                              <a href="#"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="controls-below-table">
                      <div class="table-records-info">
                        Showing records 1 - 5
                      </div>
                      <div class="table-records-pages">
                        <ul>
                          <li>
                            <a href="#">Previous</a>
                          </li>
                          <li>
                            <a class="current" href="#">1</a>
                          </li>
                          <li>
                            <a href="#">2</a>
                          </li>
                          <li>
                            <a href="#">3</a>
                          </li>
                          <li>
                            <a href="#">4</a>
                          </li>
                          <li>
                            <a href="#">Next</a>
                          </li>
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
