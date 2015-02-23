@extends('layouts.master')

@section('content')

<div class="container contact-container">
	<h1 class="text-center">Have A Question?</h1>
	<div class="mini-container">
	  <p class="text-center">Have a question, comment, or a problem? Simply fill out the form below and let us know!</p>
	</div>
	<div class="row">
		<div class="col-md-12">
			{{ Form::open(['action' => 'HomeController@sendContactUs'], ['class' => 'form-horizontal']) }}
				<div class="col-md-5 col-md-offset-3">
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'inputName', 'required')) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							{{ Form::email('email_address', Input::old('email_address'), array('class' => 'form-control', 'placeholder' => 'Email', 'id' => 'inputEmail', 'required')) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							{{ Form::textarea('content', Input::old('email_address'), array('class' => 'form-control', 'rows' => "3", 'placeholder' => 'Write your question here', 'id' => 'inputEmail', 'required')) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							{{ Form::submit('Send', array('class' => 'form-control btn btn-info')) }}
						</div>
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>

@stop