@extends('app.app')

@section('content')
<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<div class="dropdown" style="position: fixed; margin-top:110px; top: 0px; right: 20px; z-index: 99;">
								<button class="btn btn-rounded btn-primary dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Novo campo
	                            </button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-header-add">
									<a class="dropdown-item" onclick="addAllInputs('dynamicInputs', 'text');"><span class="fa fa-text-width"></span> Campo de texto</a>
									<a class="dropdown-item" onclick="addAllInputs('dynamicInputs', 'textarea');"><span class="fa fa-text-height"></span> Caixa de texto</a>
									<a class="dropdown-item" onclick="addAllInputs('dynamicInputs', 'checkbox');"><span class="fa fa-check-square	"></span> Botões de Seleção</a>
									<a class="dropdown-item" onclick="addAllInputs('dynamicInputs', 'radio');"><span class="fa fa-dot-circle-o"></span> Botões de Rádio</a>
								</div>
							</div>

							<h3>Configurar Campos</h3>
			        <ol class="breadcrumb breadcrumb-simple">
			          <li><a href="{{ route('home') }}">Home</a></li>
			          <li><a href="{{ route('rotinas.index') }}">Configurar Rotinas</a></li>
			          <li><a href="">Nome da Rotina</a></li>
								<li><a href="">Nome da Tarefa</a></li>
			          <li class="active">Configurar Campos</li>
			        </ol>
						</div>
					</div>
				</div>
			</header>


<div class="box-typical box-typical-padding">
                <div class="row">
									<div class="col-lg-12">
									<form name="myForm" method="POST">
										<div id="dynamicInputs">
											<div class="form-group pull-right">
																			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
																				<button type="button" class="btn btn-default-outline"></button>
																				<span class="input-group-btn-vertical"><button class="btn btn-default bootstrap-touchspin-up" type="button"><i class="glyphicon glyphicon-chevron-up"></i></button><button class="btn btn-default bootstrap-touchspin-down" type="button"><i class="glyphicon glyphicon-chevron-down"></i></button></span>
																				<button type="button" class="btn btn-default-outline"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
																				<button type="button" class="btn btn-danger delete">Excluir</button>

																			</div>
																		</div>
										</div>
									</form>
								</div>
                </div><!--.row-->
            </div>


@endsection

@section('scripts')

<script>
		var counterText = 0;
		var counterRadioButton = 0;
		var counterCheckBox = 0;
		var counterTextArea = 0;

		function addAllInputs(divName, inputType) {
			var newdiv = document.createElement('div');
			switch (inputType) {
				case 'text':
					newdiv.innerHTML = /* "Entry " + (counterText + 1) + */ "<div class='row' id='teste'>" +
					"<fieldset class='form-group col-lg-4 elemento'>" +
					 	"<label class='form-label semibold' for='exampleInput'>First Name</label>" +
						"<input name='text_" + counterText + "' type='text' class='form-control' placeholder='First Name'>" +
					  "<small class='text-muted'>We'll never share your email with anyone else.</small>" +
					"</fieldset>" +
					"<fieldset class='form-group col-lg-4'>" +
					 	"<label class='form-label semibold' for='exampleInput'>First Name</label>" +
						"<input name='text_" + counterText + "' type='text' class='form-control' placeholder='First Name'>" +
					  "<small class='text-muted'>We'll never share your email with anyone else.</small>" +
					"</fieldset>" +
					"<fieldset class='form-group col-lg-4'>" +
					 	"<label class='form-label semibold' for='exampleInput'>First Name</label>" +
						"<input name='text_" + counterText + "' type='text' class='form-control' placeholder='First Name'>" +
					  "<small class='text-muted'>We'll never share your email with anyone else.</small>" +
					"</fieldset>" +
					"<div class='row'>" +
						"<fieldset class='form-group col-lg-12'>" +
							"<button type='button' class='btn btn-inline btn-danger delete pull-right'>Excluir</button>" +
						"</fieldset> </div> </div></div>";
					counterText++;
					break;
				case 'radio':
					newdiv.innerHTML = "Entry " + (counterRadioButton + 1) + " <br><input type='radio' name='myRadioButtons[]'>";
					counterRadioButton++;
					break;
				case 'checkbox':
					newdiv.innerHTML = "Entry " + (counterCheckBox + 1) + " <br><input type='checkbox' name='myCheckBoxes[]'>";
					counterCheckBox++;
					break;
				case 'textarea':
					newdiv.innerHTML = "Entry " + (counterTextArea + 1) + " <br><textarea name='myTextAreas[]'>type here...</textarea>";
					counterTextArea++;
					break;
			}
			document.getElementById(divName).appendChild(newdiv);
		}
	</script>
	<script>
	$("body").on("click", ".delete", function (e) {
	document.getElementById("teste").remove();
});
	</script>


@endsection
