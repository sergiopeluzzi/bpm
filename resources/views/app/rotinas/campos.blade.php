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
									<input form="myForm" type="button" class="dropdown-item" value="Campo de texto" onclick="addAllInputs('dynamicInputs', 'text');">
									<input form="myForm" type="button" class="dropdown-item" value="Caixa de texto" onclick="addAllInputs('dynamicInputs', 'textarea');">
									<input form="myForm" type="button" class="dropdown-item" value="Botão de Selação" onclick="addAllInputs('dynamicInputs', 'checkbox');">
									<input form="myForm" type="button" class="dropdown-item" value="Botão de Rádio" onclick="addAllInputs('dynamicInputs', 'radio');">

								</div>
							</div>

							<h3>Basic Inputs</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">StartUI</a></li>
								<li><a href="#">Forms</a></li>
								<li class="active">Basic Inputs</li>
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
					newdiv.innerHTML = /* "Entry " + (counterText + 1) + */ "<fieldset class='form-group col-lg-4'><label class='form-label semibold' for='exampleInput'>First Name</label><input name='text_" + counterText + "' type='text' class='form-control' placeholder='First Name'><small class='text-muted'>We'll never share your email with anyone else.</small><button class='delete'>Delete</button></div>";
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
	$(this).parent("fieldset").remove();
});
	</script>


@endsection
