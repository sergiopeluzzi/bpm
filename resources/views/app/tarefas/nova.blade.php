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
            <span href="newtask.html">Nova Tarefa</span>
          </li>
        </ul>
        <div class="content-i">
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <h6 class="element-header">
                  Nova Tarefa
                </h6>
                  <div class="element-box">
                    <form id="formValidate" action="{{ route('tarefas.idTarefa') }}" novalidate="true">

                      <div class="form-group has-error has-danger">
                        <label for=""> Rotina</label><select class="form-control" required="required">
                                                  <option value="" disabled="" selected="">

                                                  </option>
                                                  <option value="California">
                                                    Locação
                                                  </option>
                                                  <option value="Boston">
                                                    Venda
                                                  </option>
                                                  <option value="Texas">
                                                    Administrativo
                                                  </option>
                                                  <option value="Colorado">
                                                    Financeiro
                                                  </option>
                                                  </select>
                        <div class="help-block form-text with-errors form-control-feedback"><ul class="list-unstyled"><li>Selecione um item da lista.</li></ul></div>
                      </div>
                      <div class="form-group">
                        <label for=""> Requerente</label><select class="form-control select2 select2-hidden-accessible" multiple="" required="required" tabindex="-1" aria-hidden="true">

                                                  <option>
                                                    João da Silva
                                                  </option>
                                                  <option>
                                                    José da Silva
                                                  </option>
                                                  <option>
                                                    João dos Santos
                                                  </option>
                                                  <option>
                                                    José dos Santos
                                                  </option>
                                                  <option>
                                                    Maria José
                                                  </option>
                                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 1140px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>

                      <div class="form-group has-error has-danger">
                        <label>Descrição</label><textarea class="form-control" rows="3" required="required"></textarea>
                        <div class="help-block form-text with-errors form-control-feedback"><ul class="list-unstyled"><li>Preencha este campo.</li></ul></div>
                      </div>
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
