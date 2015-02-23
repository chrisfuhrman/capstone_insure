<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insure Joy | Buy insurance without the hassle!</title>

	<!-- bootstrap physical -->
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"> 
	<!-- bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/yeti.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- custom css -->
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<!-- Favicon -->
	<link rel="icon" href="/assets/favicon.ico">
	<link rel="stylesheet" href="/assets/css/chris-css.css">


	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/simple-sidebar.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css"> 
</head>
<body>

<style>
	.create
	{
		text-decoration: underline;
	}

</style>

<div class="container ">

	<div class="text-center login-main">Login</div>

	<div class="row col-md-6 col-md-offset-3 login-container">

		{{ Form::open(['action' => 'AuthController@doLogin']) }}
			<div class="form-group">
				{{ Form::label('user_name', 'Username:', array('class' => 'big-label')) }}
				{{Form::text('username', Input::old('username'), ['class' => 'form-control']) }}
			</div>	

			<div class="form-group">
				{{ Form::label('password', 'Password:', array('class' => 'big-label')) }}
				{{Form::password('password', ['class' => 'form-control']) }}
			</div>
			<div class="input-block-level">
				{{Form::submit('Login', ['class' => 'btn btn-primary btn-lg'])}}
			</div>
		{{ Form::close() }}
		<div class="row">
			<p class="move-right text-muted"><a class="remind text-muted" href="{{{ action('RemindersController@getRemind') }}}">Forgot your Password?</a>
		</div>


		<div class="row">
			<p class="move-right text-muted">Don't have a Profile? <a class="create text-muted" href="{{{ action('createaccount') }}}"> Create one now.</a></p>
		</div>

		<a href="auth/google">
			<img id="google-login" src="/assets/img/google/Red-signin_Long_base_32dp.png">
		</a>

		<a href="auth/google">
			<img class="hide-this" id="google-login-hover" src="/assets/img/google/Red-signin_Long_press_32dp.png"/>
		</a>

	</div>
</div>



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

</body>
</html>
