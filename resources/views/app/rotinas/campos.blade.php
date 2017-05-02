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
                    Nome da Tarefa
                  </h6>
                  <div class="element-box">
                    <div id="stage1" class="build-wrap">
                      <!-- <div id="frmb-1493758515171-form-wrap" class="form-wrap form-builder"><div id="frmb-1493758515171-stage-wrap" class="stage-wrap pull-left empty" data-content="Drag a field from the right to this area"><ul id="frmb-1493758515171" class="frmb ui-sortable" style="min-height: 660px;"></ul></div><div id="frmb-1493758515171-cb-wrap" class="cb-wrap pull-right">
                      <ul id="frmb-1493758515171-control-box" class="frmb-control sort-enabled ui-sortable"><li class="icon-autocomplete input-control input-control-0" data-type="autocomplete" style=""><span>Autocomplete</span></li><li class="icon-button input-control input-control-1" data-type="button"><span>Button</span></li><li class="icon-checkbox-group input-control input-control-2" data-type="checkbox-group"><span>Checkbox Group</span></li>
                        <li class="icon-date input-control input-control-3" data-type="date"><span>Date Field</span></li><li class="icon-file input-control input-control-4" data-type="file"><span>File Upload</span></li><li class="icon-header input-control input-control-5" data-type="header"><span>Header</span></li><li class="icon-hidden input-control input-control-6" data-type="hidden"><span>Hidden Input</span></li>
                        <li class="icon-paragraph input-control input-control-7" data-type="paragraph"><span>Paragraph</span></li><li class="icon-number input-control input-control-8" data-type="number"><span>Number</span></li><li class="icon-radio-group input-control input-control-9" data-type="radio-group"><span>Radio Group</span></li><li class="icon-select input-control input-control-10" data-type="select"><span>Select</span></li>
                        <li class="icon-text input-control input-control-11" data-type="text"><span>Text Field</span></li><li class="icon-textarea input-control input-control-12" data-type="textarea"><span>Text Area</span></li><li class=" input-control input-control-13" data-type="starRating"><span><span class="control-icon">🌟</span>Star Rating</span></li>
                        <li class="fb-separator"><hr></li>
                        <li class="input-set-control input-set-0" type="user-details">User Details</li><li class="input-set-control input-set-1" type="user--agreement">User Agreement</li></ul><div class="form-actions btn-group"><button id="frmb-1493758515171-clear-action" class="clear-all btn btn-danger">Clear</button><button id="frmb-1493758515171-data-action" class="btn btn-default">{  }</button>
                          <button id="frmb-1493758515171-save-action" type="button" class="btn btn-primary save-template">Save</button></div></div></div>-->
                        </div>
                    <!-- <div id="stage2" class="build-wrap"></div> -->
                    <div class="render-wrap"></div>
                    <button id="edit-form">Edit Form</button>
                    <div class="action-buttons">
                      <h2>Actions</h2>
                      <button id="showData" type="button">Show Data</button>
                      <button id="clearFields" type="button">Clear All Fields</button>
                      <button id="getData" type="button">Get Data</button>
                      <button id="setData" type="button">Set Data</button>
                      <button id="addField" type="button">Add Field</button>
                      <button id="removeField" type="button">Remove Field</button>
                      <h2>i18n</h2>
                      <select id="setLanguage">
                        <option value="ar-TN" dir="rtl">تونسي</option>
                        <option value="de-DE">Deutsch</option>
                        <option value="en-US">English</option>
                        <option value="es-ES">español</option>
                        <option value="fa-IR" dir="rtl">فارسى</option>
                        <option value="fr-FR">français</option>
                        <option value="nb-NO">norsk</option>
                        <option value="nl-NL">Nederlands</option>
                        <option value="pt-BR">português</option>
                        <option value="ro-RO">român</option>
                        <option value="ru-RU">Русский язык</option>
                        <option value="tr-TR">Türkçe</option>
                        <option value="vi-VN">tiếng việt</option>
                        <option value="zh-TW">台語</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
