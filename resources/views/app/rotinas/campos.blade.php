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

<div id="fb-editor"></div>

</div>


@endsection

@section('scripts')

<script src="{{ asset('app/js/lib/formbuilder/vendor.min.js') }}"></script>
<script src="{{ asset('app/js/lib/formbuilder/form-builder.min.js') }}"></script>
<script src="{{ asset('app/js/lib/formbuilder/form-render.min.js') }}"></script>

<script>
jQuery(document).ready(function($) {
  var options = {
      i18n: {
        locale: ''
      },
      controlOrder: [
        'text',
        'textarea'
      ],
      disableFields: [
        'autocomplete',
        'button'
      ],
      disabledAttrs: [
        'name',
        'className',
        'value',
        'access',
        'inline'
      ],
      fieldRemoveWarn: true,
      sortableControls: false,
      stickyControls: {
        enable: true,
        offset: {
          top: 85,
          right: 40,
          left: 'auto'
        }
      }
    },
    $fbTemplate = $(document.getElementById('fb-editor'));
  $fbTemplate.formBuilder(options);
});
</script>

@endsection
