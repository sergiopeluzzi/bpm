@extends('app.app')

@section('content')

<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span href="index.html">Home</span>
  </li>
</ul>
<div class="content-i">
  <div class="content-box">
    <div class="row">
      <div class="col-sm-12">
        <div class="element-wrapper">
          <div class="element-actions">
            <form class="form-inline justify-content-sm-end">
              <select class="form-control form-control-sm rounded">
                  <option value="Pending">
                    Hoje
                  </option>
                  <option value="Active">
                    Última semana
                  </option>
                  <option value="Cancelled">
                    Último mês
                  </option>
                </select>
            </form>
          </div>
          <h6 class="element-header">
              Minhas estatísticas
            </h6>
          <div class="element-content">
            <div class="row">
              <div class="col-sm-4">
                <div class="element-box el-tablo">
                  <div class="label">
                    Tarefas Concluidas
                  </div>
                  <div class="value">
                    57
                  </div>
                  <div class="trending trending-up">
                    <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="element-box el-tablo">
                  <div class="label">
                    Tarefas em aberto
                  </div>
                  <div class="value">
                    13
                  </div>
                  <div class="trending trending-down-basic">
                    <span>12%</span><i class="os-icon os-icon-arrow-2-down"></i>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="element-box el-tablo">
                  <div class="label">
                    Tempo médio
                  </div>
                  <div class="value">
                    4:12h
                  </div>
                  <div class="trending trending-down-basic">
                    <span>9%</span><i class="os-icon os-icon-graph-down"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="element-wrapper">
          <h6 class="element-header">
                              Últimas tarefas
                            </h6>
          <div class="element-box">
            <div class="table-responsive">
              <table class="table table-lightborder">
                <thead>
                  <tr>
                    <th>
                      Customer Name
                    </th>
                    <th>
                      Products Ordered
                    </th>
                    <th class="text-center">
                      Status
                    </th>
                    <th class="text-right">
                      Order Total
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="nowrap">
                      John Mayers
                    </td>
                    <td>
                      <div class="cell-image-list">
                        <div class="cell-img" style="background-image: url(img/portfolio9.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio2.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio12.jpg)"></div>
                        <div class="cell-img-more">
                          + 5 more
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right">
                      $354
                    </td>
                  </tr>
                  <tr>
                    <td class="nowrap">
                      Kelly Brans
                    </td>
                    <td>
                      <div class="cell-image-list">
                        <div class="cell-img" style="background-image: url(img/portfolio14.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio8.jpg)"></div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right">
                      $94
                    </td>
                  </tr>
                  <tr>
                    <td class="nowrap">
                      Tim Howard
                    </td>
                    <td>
                      <div class="cell-image-list">
                        <div class="cell-img" style="background-image: url(img/portfolio16.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio14.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio5.jpg)"></div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right">
                      $156
                    </td>
                  </tr>
                  <tr>
                    <td class="nowrap">
                      Joe Trulli
                    </td>
                    <td>
                      <div class="cell-image-list">
                        <div class="cell-img" style="background-image: url(img/portfolio1.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio5.jpg)"></div>
                        <div class="cell-img" style="background-image: url(img/portfolio6.jpg)"></div>
                        <div class="cell-img-more">
                          + 2 more
                        </div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right">
                      $1,120
                    </td>
                  </tr>
                  <tr>
                    <td class="nowrap">
                      Jerry Lingard
                    </td>
                    <td>
                      <div class="cell-image-list">
                        <div class="cell-img" style="background-image: url(img/portfolio9.jpg)"></div>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                    </td>
                    <td class="text-right">
                      $856
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="element-wrapper">
          <h6 class="element-header">
              Status das tarefas
            </h6>
          <div class="element-box">
            <div class="el-chart-w">
              <canvas height="120" id="donutChart" width="120"></canvas>
              <div class="inside-donut-chart-label">
                <strong>142</strong><span>Total Tarefas</span>
              </div>
            </div>
            <div class="el-legend">
              <div class="legend-value-w">
                <div class="legend-pin" style="background-color: #6896f9;"></div>
                <div class="legend-value">
                  Atendendo
                </div>
              </div>
              <div class="legend-value-w">
                <div class="legend-pin" style="background-color: #85c751;"></div>
                <div class="legend-value">
                  Em aberto
                </div>
              </div>
              <div class="legend-value-w">
                <div class="legend-pin" style="background-color: #d97b70;"></div>
                <div class="legend-value">
                  Finalizado
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-panel">
    <div class="element-wrapper">
      <h6 class="element-header">
                      Atividades Recentes
                    </h6>
      <div class="element-box-tp">
        <div class="activity-boxes-w">
          <div class="activity-box-w">
            <div class="activity-time">
              10 Min
            </div>
            <div class="activity-box">
              <div class="activity-avatar">
                <img alt="" src="img/avatar1.jpg">
              </div>
              <div class="activity-info">
                <div class="activity-role">
                  Mark Pearson
                </div>
                <strong class="activity-title">Opened New Account</strong>
              </div>
            </div>
          </div>
          <div class="activity-box-w">
            <div class="activity-time">
              2 Hours
            </div>
            <div class="activity-box">
              <div class="activity-avatar">
                <img alt="" src="img/avatar1.jpg">
              </div>
              <div class="activity-info">
                <div class="activity-role">
                  John Mayers
                </div>
                <strong class="activity-title">Posted Comment</strong>
              </div>
            </div>
          </div>
          <div class="activity-box-w">
            <div class="activity-time">
              5 Hours
            </div>
            <div class="activity-box">
              <div class="activity-avatar">
                <img alt="" src="img/avatar1.jpg">
              </div>
              <div class="activity-info">
                <div class="activity-role">
                  Kate Wallet
                </div>
                <strong class="activity-title">Opened New Account</strong>
              </div>
            </div>
          </div>
          <div class="activity-box-w">
            <div class="activity-time">
              5 Hours
            </div>
            <div class="activity-box">
              <div class="activity-avatar">
                <img alt="" src="img/avatar1.jpg">
              </div>
              <div class="activity-info">
                <div class="activity-role">
                  Kate Wallet
                </div>
                <strong class="activity-title">Opened New Account</strong>
              </div>
            </div>
          </div>
          <div class="activity-box-w">
            <div class="activity-time">
              5 Hours
            </div>
            <div class="activity-box">
              <div class="activity-avatar">
                <img alt="" src="{{ asset('img/avatar1.jpg' ) }}">
              </div>
              <div class="activity-info">
                <div class="activity-role">
                  Kate Wallet
                </div>
                <strong class="activity-title">Opened New Account</strong>
              </div>
            </div>
          </div>
          <div class="activity-box-w">
            <div class="activity-time">
              5 Hours
            </div>
            <div class="activity-box">
              <div class="activity-avatar">
                <img alt="" src="{{ asset('img/avatar1.jpg') }}">
              </div>
              <div class="activity-info">
                <div class="activity-role">
                  Kate Wallet
                </div>
                <strong class="activity-title">Opened New Account</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
