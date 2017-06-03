@extends('app.layouts.master')

@section('styles')

@endsection

@section('content')
	        <div class="row">
	            <div class="col-xl-6">
	                <div class="chart-statistic-box">
	                    <div class="chart-txt">
	                        <div class="chart-txt-top">
	                            <p><span class="unit">$</span><span class="number">1540</span></p>
	                            <p class="caption">Week income</p>
	                        </div>
	                        <table class="tbl-data">
	                            <tr>
	                                <td class="price color-purple">120$</td>
	                                <td>Orders</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-yellow">15$</td>
	                                <td>Investments</td>
	                            </tr>
	                            <tr>
	                                <td class="price color-lime">55$</td>
	                                <td>Others</td>
	                            </tr>
	                        </table>
	                    </div>
	                    <div class="chart-container">
	                        <div class="chart-container-in">
	                            <div id="chart_div"></div>
	                            <header class="chart-container-title">Income</header>
	                            <div class="chart-container-x">
	                                <div class="item"></div>
	                                <div class="item">tue</div>
	                                <div class="item">wed</div>
	                                <div class="item">thu</div>
	                                <div class="item">fri</div>
	                                <div class="item">sat</div>
	                                <div class="item">sun</div>
	                                <div class="item">mon</div>
	                                <div class="item"></div>
	                            </div>
	                            <div class="chart-container-y">
	                                <div class="item">300</div>
	                                <div class="item"></div>
	                                <div class="item">250</div>
	                                <div class="item"></div>
	                                <div class="item">200</div>
	                                <div class="item"></div>
	                                <div class="item">150</div>
	                                <div class="item"></div>
	                                <div class="item">100</div>
	                                <div class="item"></div>
	                                <div class="item">50</div>
	                                <div class="item"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div><!--.chart-statistic-box-->
	            </div><!--.col-->
	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number">26</div>
	                                <div class="caption"><div>Open tickets</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>15%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">12</div>
	                                <div class="caption"><div>Closes tickets</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>11%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number">104</div>
	                                <div class="caption"><div>New clients</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p>5%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">29</div>
	                                <div class="caption"><div>Here is an example of a long name</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p>84%</p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->

	        <div class="row">
	            <div class="col-xl-6 dahsboard-column">
	                <section class="box-typical box-typical-dashboard panel panel-default scrollable">
										<header class="box-typical-header">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-title">
													<h3>Tarefas aguardando aprovação</h3>
												</div>
												<div class="tbl-cell tbl-cell-action-bordered">
													<button type="button" class="action-btn"><i class="font-icon font-icon-pencil"></i></button>
												</div>
												<div class="tbl-cell tbl-cell-action-bordered">
													<button type="button" class="action-btn"><i class="font-icon font-icon-re"></i></button>
												</div>
												<div class="tbl-cell tbl-cell-action-bordered">
													<button type="button" class="action-btn"><i class="font-icon font-icon-trash"></i></button>
												</div>
											</div>
										</header>
										<div class="box-typical-body">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="table-check">
																<div class="checkbox checkbox-only">
																	<input type="checkbox" id="table-check-head">
																	<label for="table-check-head"></label>
																</div>
															</th>
															<th>ID</th>
															<th>Nome da rotina</th>
															<th>Descrição</th>
															<th class="table-icon-cell">
																<i class="font-icon font-icon-heart"></i>
															</th>
															<th class="table-icon-cell">
																<i class="font-icon font-icon-comment"></i>
															</th>
															<th>Criado em</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="table-check">
																<div class="checkbox checkbox-only">
																	<input type="checkbox" id="table-check-1">
																	<label for="table-check-1"></label>
																</div>
															</td>
															<td>
															</td>
															<td>
																<a href="#"></a>
																<span class="hint-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Help">?</span>
															</td>
															<td class="color-blue-grey-lighter">  </td>
															<td class="table-icon-cell">
																<i class="font-icon font-icon-heart"></i>
															</td>
															<td class="table-icon-cell">
																<i class="font-icon font-icon-comment"></i>
															</td>
															<td class="table-date">6 minutes ago <i class="font-icon font-icon-clock"></i></td>
															<td class="table-photo">
																<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
															</td>
														</tr>
													</tbody>
												</table>

											</div>

										</div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->

	            </div><!--.col-->
	            <div class="col-xl-6 dahsboard-column">
	                <section class="box-typical box-typical-dashboard panel panel-default scrollable">
										<header class="box-typical-header">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-title">
													<h3>Minhas tarefas</h3>
												</div>
												<div class="tbl-cell tbl-cell-action-bordered">
													<button type="button" class="action-btn"><i class="font-icon font-icon-pencil"></i></button>
												</div>
												<div class="tbl-cell tbl-cell-action-bordered">
													<button type="button" class="action-btn"><i class="font-icon font-icon-re"></i></button>
												</div>
												<div class="tbl-cell tbl-cell-action-bordered">
													<button type="button" class="action-btn"><i class="font-icon font-icon-trash"></i></button>
												</div>
											</div>
										</header>
										<div class="box-typical-body">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="table-check">
																<div class="checkbox checkbox-only">
																	<input type="checkbox" id="table-check-head">
																	<label for="table-check-head"></label>
																</div>
															</th>
															<th>ID</th>
															<th>Nome da rotina</th>
															<th>Descrição</th>
															<th class="table-icon-cell">
																<i class="font-icon font-icon-heart"></i>
															</th>
															<th class="table-icon-cell">
																<i class="font-icon font-icon-comment"></i>
															</th>
															<th>Criado em</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="table-check">
																<div class="checkbox checkbox-only">
																	<input type="checkbox" id="table-check-1">
																	<label for="table-check-1"></label>
																</div>
															</td>
															<td>
															</td>
															<td>
																<a href="#"></a>
																<span class="hint-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Help">?</span>
															</td>
															<td class="color-blue-grey-lighter">  </td>
															<td class="table-icon-cell">
																<i class="font-icon font-icon-heart"></i>
															</td>
															<td class="table-icon-cell">
																<i class="font-icon font-icon-comment"></i>
															</td>
															<td class="table-date">6 minutes ago <i class="font-icon font-icon-clock"></i></td>
															<td class="table-photo">
																<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
															</td>
														</tr>
													</tbody>
												</table>

											</div>

										</div><!--.box-typical-body-->
	                </section><!--.box-typical-dashboard-->

	            </div><!--.col-->
	        </div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('app/js/lib/jqueryui/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('app/js/lib/lobipanel/lobipanel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('app/js/lib/match-height/jquery.matchHeight.min.js') }}"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function() {

			$('.panel').lobiPanel({
				sortable: true
			});
			$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
				$('.dahsboard-column').matchHeight();
			});

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						}
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
@endsection
