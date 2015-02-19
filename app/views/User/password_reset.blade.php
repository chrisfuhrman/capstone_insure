@extends('layouts.master')

@section('content')

	
	{{ Form::open(array('action' =>  'RemindersController@postReset', 'method' => 'POST')) }}
    
   {{ Form::hidden('token', $token) }}
    
    <div class="form-group">
		{{ Form::label('email', 'Email:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::email('email', 'email', array('class' => 'form-control', 'id' => 'email', 'placeholer' => 'example@gmail.com')) }}
			</div>
		</div>
		{{ $errors->first('email', '<span class="help-block">:message</span>') }}
	</div>

	<div class="form-group">
		{{ Form::label('password', 'Password:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::password('password', array('class' => 'form-control', 'id' => 'password', 'name' => 'password')) }}
			</div>
		</div>
		{{ $errors->first('password', '<span class="help-block">:message</span>') }}
	</div>

	<div class="form-group">
		{{ Form::label('password_confirmation', 'Verify Password:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::password('password_confirmation', array('class' => 'form-control', 'id' => 'password_confirmation', 'name' => 'password_confirmation')) }}
			</div>
		</div>
		{{ $errors->first('password_confirmation', '<span class="help-block">:message</span>') }}
	</div>

	{{ Form::submit('Reset Password', array('class' => 'name')) }}

	{{ Form::close() }}


@stop