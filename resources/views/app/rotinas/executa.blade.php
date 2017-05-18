@extends('app.app')

@section('styles')

@endsection

@section('content')
<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nome da Rotina</h3>
			        <ol class="breadcrumb breadcrumb-simple">
			          <li><a href="{{ route('home') }}">Home</a></li>
			          <li><a href="{{ route('rotinas.index') }}">Rotinas</a></li>
			          <li><a href="">Nome da Rotina</a></li>
			          <li class="active">Nome da Tarefa</li>
			        </ol>
						</div>
					</div>
				</div>
			</header>


      <div class="box-typical box-typical-padding">
        <div class="row m-t-lg">
						<div class="col-md-12">
							<form id="form-signup_v1" name="form-signup_v1" action="#" method="POST">
								<div class="form-group">
									<label class="form-label" for="signup_v1-username">Campo de Texto</label>
									<div class="form-control-wrapper">
										<input id="signup_v1-username"
											   class="form-control"
											   name="signup_v1[username]"
											   type="text" data-validation="[L>=6, L<=18, MIXED]"
											   data-validation-message="$ must be between 6 and 18 characters. No special characters allowed."
											   data-validation-regex="/^((?!admin).)*$/i"
											   data-validation-regex-message="The word &quot;Admin&quot; is not allowed in the $">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label" for="signup_v1-password">Password</label>
									<div class="form-control-wrapper">
										<input id="signup_v1-password"
											   class="form-control"
											   name="signup_v1[password]"
											   type="password" data-validation="[L>=6]"
											   data-validation-message="$ must be at least 6 characters">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label" for="signup_v1-password-confirm">Confirm Password</label>
									<div class="form-control-wrapper">
										<input id="signup_v1-password-confirm"
											   class="form-control"
											   name="signup_v1[password-confirm]"
											   type="password" data-validation="[V==signup_v1[password]]"
											   data-validation-message="$ does not match the password">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label" for="signup_v1-email">Email</label>
									<div class="form-control-wrapper">
										<input id="signup_v1-email"
											   class="form-control"
											   name="signup_v1[email]"
											   type="text"
											   data-validation="[EMAIL]">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label" for="signup_v1-email-confirm">Confirm Email</label>
									<div class="form-control-wrapper">
										<input id="signup_v1-email-confirm"
											   class="form-control"
											   name="signup_v1[email-confirm]"
											   type="text"
											   data-validation="[V==signup_v1[email]]"
											   data-validation-message="$ does not match the email">
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn">Sign up!</button>
								</div>
							</form>
						</div>
						<div class="col-md-12">
							<form id="form-signup_v2" name="form-signup_v2" method="POST">
								<div class="form-group">
									<label class="form-label" for="signup_v2-name">Name</label>
									<div class="form-control-wrapper">
										<input id="signup_v2-name"
											   class="form-control"
											   name="signup_v2[name]"
											   type="text"
											   data-validation="[OPTIONAL, NAME, L>=2, TRIM]">
									</div>
								</div>
								<div class="form-group form-group-radios">
									<label class="form-label" id="signup_v2-gender">
										Gender <span class="color-red">*</span>
									</label>
									<div class="radio">
										<input id="signup_v2-gender-male"
											   name="signup_v2[gender]"
											   data-validation="[NOTEMPTY]"
											   data-validation-group="signup_v2-gender"
											   data-validation-message="You must select a gender"
											   type="radio"
											   value="male">
										<label for="signup_v2-gender-male">Male</label>
									</div>
									<div class="radio">
										<input id="signup_v2-gender-female"
											   name="signup_v2[gender]"
											   data-validation-group="signup_v2-gender"
											   type="radio"
											   value="female">
										<label for="signup_v2-gender-female">Female</label>
									</div>
									<div class="radio">
										<input id="signup_v2-gender-other"
											   name="signup_v2[gender]"
											   data-validation-group="signup_v2-gender"
											   type="radio"
											   value="other">
										<label for="signup_v2-gender-other">Other</label>
									</div>
								</div>
								<div class="form-group form-group-checkbox">
									<div class="checkbox">
										<input id="signup_v2-agree"
											   name="signup_v2[agree]"
											   data-validation="[NOTEMPTY]"
											   data-validation-message="You must agree the terms and conditions"
											   type="checkbox">
										<label for="signup_v2-agree">I agree the <a href="#">terms</a> and <a href="#">conditions</a></label>
									</div>
								</div>
								<button type="submit" class="btn">Sign up!</button>
							</form>
						</div>
					</div><!--.row-->
      </div>
    <nav>
					<ul class="pager">
						<li class="pager-prev disabled"><a href="#">Tarefa Anterior</a></li>
						<li class="pager-next"><a href="#">Próxima Tarefa</a></li>
					</ul>
				</nav>



@endsection

@section('scripts')
<script src="{{ asset('app/js/lib/html5-form-validation/jquery.validation.min.js') }}"></script>
	<script>
		$(function() {
			/* ==========================================================================
			 Validation
			 ========================================================================== */

			$('#form-signin_v1').validate({
				submit: {
					settings: {
						inputContainer: '.form-group'
					}
				}
			});

			$('#form-signin_v2').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-error-text-block',
						display: 'block',
						insertion: 'prepend'
					}
				}
			});

			$('#form-signup_v1').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});

			$('#form-signup_v2').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});
		});
	</script>
@endsection
