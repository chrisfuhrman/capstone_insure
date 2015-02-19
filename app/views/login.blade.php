@extends('layouts.master')

@section('content')

<style>
	.create
	{
		text-decoration: underline;
	}

</style>

<div class="container">

	<h1>Login</h1>

	<div class="row col-md-6">

		{{ Form::open(['action' => 'AuthController@doLogin']) }}
			<div class="form-group">
				{{Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username']) }}
			</div>	

			<div class="form-group">
				{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
			</div>
			<div class="form-group">
				{{Form::submit('Login', ['class' => 'btn btn-primary'])}}
			</div>
		{{ Form::close() }}

		<p>Don't have a Profile? <a class="create" href="{{{ route('createaccount') }}}"> Create one now.</a>
		<p><a class="remind" href="{{{ route('remind') }}}">Forgot your Password?</a>
			

		<a href="auth/google">
			<img id="google-login" src="/assets/img/google/Red-signin_Long_base_32dp.png">
		</a>

		<a href="auth/google">
			<img class="hide-this" id="google-login-hover" src="/assets/img/google/Red-signin_Long_press_32dp.png"/>
		</a>

	</div>
</div>

@stop

@section('bottom-script')
	<script>
		(function() {
			// Change google sign in btn on hover
			var img = $('#google-login');

			img.on('mouseenter', function() {
				$(this).hide()
					$('#google-login-hover').show();

			});
			
			$('#google-login-hover').on('mouseout', function() {
				$(this).hide()
					img.show();
			});

				
	})();
	</script>


@stop
