@extends('layouts.master')

@section('content')
	
	{{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'POST')) }}
	
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

	{{ Form::submit('Send Reminder', array('class' => 'name')) }}

	{{ Form::close() }}

@stop