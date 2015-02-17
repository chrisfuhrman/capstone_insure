@extends('layouts.master')

@section('content')

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

	</div>
</div>

      
          



@stop

