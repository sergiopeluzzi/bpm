@extends('app.app')

@section('styles')

@endsection

@section('content')
<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
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

<form name="myForm" method="POST">
    <div id="novoCampo">
          </div>
          <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <div class="input-group">
                <select class="form-control" id="tipoCampo" name="tipoCampo[]">
                  <option value="">Tipo do campo</option>
                  <option value="1">Texto</option>
                  <option value="2">Área de texto</option>
                  <option value="3">Campo de seleção</option>
                  <option value="4">Checklist</option>
                  <option value="5">Radio</option>
                  <option value="6">Número</option>
                  <option value="7">Upload</option>
                </select>
              </div>
            </div>
          </div>
         <div class="col-sm-4">
    <div class="form-group">
      <input type="text" class="form-control" id="rotuloCampo" name="rotuloCampo[]" value="" placeholder="Rótulo do Campo">
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <input type="text" class="form-control" id="descricaoCampo" name="descricaoCampo[]" value="" placeholder="Descrição">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <div class="input-group">
      <input type="text" class="form-control" id="textoAjuda" name="textoAjuda[]" value="" placeholder="Texto de ajuda">
    </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <div class="input-group">
      <input type="text" class="form-control" id="opcaoCampo" name="opcaoCampo[]" value="" placeholder="Opções (separados por vírgula)">

    </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      <div class="input-group">
        <div class="checkbox">
        	<input id="signup_v2-agree" name="signup_v2[agree]" data-validation="[NOTEMPTY]" data-validation-message="You must agree the terms and conditions" type="checkbox">
        		<label for="signup_v2-agree">Campo obrigatório</label>
        </div>
                          <div class="input-group-btn">
                            <button class="btn btn-success" type="button"  onclick="novoCampo();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                          </div>
    </div>
    </div>
  </div>




</div>

  <div class="clear"></div>
  <div class="row p-r">
    <br>
  <fieldset class="form-group pull-right">
									<button type="submit" class="btn">Criar campos</button>
								</fieldset>
              </div>
</form>
    </div>
    <div class="panel-footer"><small>Clique <span class="glyphicon glyphicon-plus gs"></span> para adicionar um novo campo</small>, <small>ou clique <span class="glyphicon glyphicon-minus gs"></span> para remover o campo.</small></div>


@endsection

@section('scripts')
<script>
var count = 1;
function novoCampo() {

    count++;
    var objTo = document.getElementById('novoCampo')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removerCampo"+count);
	var rdiv = 'removerCampo'+count;

     divtest.innerHTML = '<div class="row"> <div class="col-sm-4"> <div class="form-group"> <div class="input-group"> <select class="form-control" id="tipoCampo" name="tipoCampo[]"> <option value="">Tipo do campo</option> <option value="1">Texto</option> <option value="2">Área de texto</option> <option value="3">Campo de seleção</option> <option value="4">Checklist</option> <option value="5">Radio</option> <option value="6">Número</option> <option value="7">Upload</option> </select> </div> </div> </div> <div class="col-sm-4"> <div class="form-group"> <input type="text" class="form-control" id="rotuloCampo" name="rotuloCampo[]" value="" placeholder="Rótulo do Campo"> </div> </div> <div class="col-sm-4"> <div class="form-group"> <input type="text" class="form-control" id="descricaoCampo" name="descricaoCampo[]" value="" placeholder="Descrição"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" id="textoAjuda" name="textoAjuda[]" value="" placeholder="Texto de ajuda"> </div> </div> </div> <div class="col-sm-5"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" id="opcaoCampo" name="opcaoCampo[]" value="" placeholder="Opções (separados por vírgula)"> </div> </div> </div> <div class="col-sm-3"> <div class="form-group"> <div class="input-group"> <div class="checkbox"> <input id="signup_v2-agree" name="signup_v2[agree]" data-validation="[NOTEMPTY]" data-validation-message="You must agree the terms and conditions" type="checkbox"> <label for="signup_v2-agree">Campo obrigatório</label> </div> <div class="input-group-btn"> <button class="btn btn-danger" type="button"  onclick="deletarCampos('+ count +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button> </div> </div> </div> </div> </div>';

    objTo.appendChild(divtest)
}
   function deletarCampos(rid) {
	   $('.removerCampo'+rid).remove();
   }
</script>

@endsection
