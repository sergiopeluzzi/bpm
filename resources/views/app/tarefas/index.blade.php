@extends('app.app')

@section('content')

                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.html">Início</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span href="mytasks.html">Minhas Tarefas</span>
                    </li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <div class="el-buttons-list full-width">
                                            <a class="btn btn-white btn-sm" href="{{ route('tarefas.nova') }}"><i class="os-icon os-icon-delivery-box-2"></i><span>Nova Tarefa</span></a>
                                        </div>
                                    </div>
                                    <h6 class="element-header">
                                      Minhas tarefas
                                    </h6>
                                    <div class="element-box">
                                        <div class="controls-above-table">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a class="btn btn-sm btn-success" href="#">Atender</a><a class="btn btn-sm btn-warning" href="#">Pendente</a><a class="btn btn-sm btn-danger" href="#">Finalizar</a>
                                                    <a class="btn btn-sm btn-secondary" href="#">Imprimir</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form class="form-inline justify-content-sm-end">
                                                        <input class="form-control form-control-sm rounded bright" placeholder="Pesquisar" type="text"><select class="form-control form-control-sm rounded bright">
                              <option selected="selected" value="">
                                Filtrar por Status
                              </option>
                              <option value="Pending">
                                Em atendimento
                              </option>
                              <option value="Active">
                                Pendente
                              </option>
                              <option value="Active">
                                Aguardando validação
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
                                                            Rotina
                                                        </th>
                                                        <th>
                                                            Descrição
                                                        </th>
                                                        <th>
                                                            Requerente
                                                        </th>
                                                        <th>
                                                            Prazo
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
                                                            Locação
                                                        </td>
                                                        <td>
                                                            Breve descrição da tarefa
                                                        </td>
                                                        <td class="text-right">
                                                            Rafael Mundel
                                                        </td>
                                                        <td>
                                                            17 minutos
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="task.html"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Locação
                                                        </td>
                                                        <td>
                                                            Breve descrição da tarefa
                                                        </td>
                                                        <td class="text-right">
                                                            Rafael Mundel
                                                        </td>
                                                        <td>
                                                            18 minutos
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="task.html"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Locação
                                                        </td>
                                                        <td>
                                                            Breve descrição da tarefa
                                                        </td>
                                                        <td class="text-right">
                                                            Rafael Mundel
                                                        </td>
                                                        <td>
                                                            19 minutos
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="task.html"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Locação
                                                        </td>
                                                        <td>
                                                            Breve descrição da tarefa
                                                        </td>
                                                        <td class="text-right">
                                                            Rafael Mundel
                                                        </td>
                                                        <td>
                                                            20 minutos
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="task.html"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <input class="form-control" type="checkbox">
                                                        </td>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Locação
                                                        </td>
                                                        <td>
                                                            Breve descrição da tarefa
                                                        </td>
                                                        <td class="text-right">
                                                            Rafael Mundel
                                                        </td>
                                                        <td>
                                                            21 minutos
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                                        </td>
                                                        <td class="row-actions">
                                                            <a href="task.html"><i class="os-icon os-icon-pencil-2"></i></a><a href="#"><i class="os-icon os-icon-link-3"></i></a><a class="danger" href="#"><i class="os-icon os-icon-database-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="controls-below-table">
                                            <div class="table-records-info">
                                                Mostrando resultados 1 - 5
                                            </div>
                                            <div class="table-records-pages">
                                                <ul>
                                                    <li>
                                                        <a href="#">Anterior</a>
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
                                                        <a href="#">Próximo</a>
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
