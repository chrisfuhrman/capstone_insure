@extends('layouts.master')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-10">

			<div class="mini-container">
				<div class="row">
					<div class="col-md-6">
						<h1> Create New Account </h1>
					</div>
				</div>
			</div>

			<div class="mini-container">
				<div class="row">
					<div class="col-md-6">
						<p>If you already have an account:</p><a class="btn btn-info" href="{{{ route('login') }}}">Log in</a>
					</div>
				</div>
			</div>


			{{ Form::open(array('action' => 'UserController@saveCreateAccount')) }}
			
			<div class="form-group">
				{{ Form::label('first_name', 'First Name:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name', 'name' => 'first_name')) }}
					</div>
				</div>
				{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('middle_name', 'Middle Name:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::text('middle_name', Input::old('middle_name'), array('class' => 'form-control', 'placeholder' => 'Middle Name (if you have one)', 'id' => 'middle_name', 'name' => 'middle_name')) }}
					</div>
				</div>
				{{ $errors->first('middle_name', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('last_name', 'Last Name:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name', 'name' => 'last_name')) }}
					</div>
				</div>
				{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('maiden_name', 'Maiden Name:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::text('maiden_name', Input::old('maiden_name'), array('class' => 'form-control', 'placeholder' => 'Madien Name (if you have one)', 'id' => 'maiden_name', 'name' => 'maiden_name')) }}
					</div>
				</div>
				{{ $errors->first('maiden_name', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('dob', 'Date of Birth:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
						{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'dob')) }}
					</div>
				</div>
				{{ $errors->first('dob', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('username', 'Username:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Username', 'id' => 'username', 'name' => 'username')) }}
					</div>
				</div>
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
						{{ Form::password('password', array('class' => 'form-control', 'id' => 'password', 'name' => 'password')) }}
					</div>
				</div>
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
						{{ Form::email('email', 'eMail', array('class' => 'form-control', 'id' => 'email', 'name' => 'email')) }}
					</div>
				</div>
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
			<div class="controls">
				<label class="control-label" for="gender">Gender</label>
				<div class="input-group col-sm-5">
				<div class="wrap">	
					<div class="btn-group" id="gender">
						<span class="input-group-addon gender-icon"><i class="fa fa-user"></i></span>
						<label id="gender-male" class="btn-gender btn btn-mini btn-default" for="">
							{{Form::radio('gender', 'm') }} Male
						</label>
							<label id="gender-female" class="btn-gender btn btn-mini btn-info" for="">
							{{Form::radio('gender', 'f') }} Female
						</label>
					</div>
				</div>
				</div>
			</div>
			</div>

			<!-- Work ( )  -->

			<div class="form-group">
				{{ Form::label('work_phone', 'Work Phone:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-phone"></i></span>
						{{ Form::text('work_phone', Input::old('work_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => "phone2", 'name' => 'work_phone')) }}
					</div>
				</div>
				{{ $errors->first('work_phone', '<span class="help-block">:message</span>') }}
			</div>

			<!-- Home ( ) -->

			<div class="form-group">
				{{ Form::label('home_phone', 'Home Phone:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-phone"></i></span>
						{{ Form::text('home_phone', Input::old('home_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => 'phone', 'name' => 'home_phone')) }}
					</div>
				</div>
				{{ $errors->first('home_phone', '<span class="help-block">:message</span>') }}
			</div>

			<!-- 5. a. Home Address Street -->

			<div class="form-group">
				{{ Form::label('address', 'Address:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
						{{ Form::text('address', Input::old('address'), array('class' => "form-control", 'placeholder' => 'Home Address', 'id' => "address", 'name' => "address")) }}
					</div>
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
						{{ Form::text('address2', Input::old('address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "address2", 'name' => "address2")) }}
					</div>
				</div>
				{{ $errors->first('address', '<span class="help-block">:message</span>') }}
				{{ $errors->first('address2', '<span class="help-block">:message</span>') }}
			</div>

			<!-- City, State _________________________  -->	

			<div class="form-group">
				{{ Form::label('city', 'City:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('city', Input::old('city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "city", 'name' => "city")) }}
					</div>
				</div>
				{{ $errors->first('city', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('state', 'State:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
						{{ Form::text('state', Input::old('state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "state", 'name' => "state")) }}
					</div>
				</div>
				{{ $errors->first('state', '<span class="help-block">:message</span>') }}
			</div>

			<!-- ZIP __________________ -->

			<div class="form-group">
				{{ Form::label('zip', 'Zip:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
						{{ Form::text('zip', Input::old('zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "zip", 'name' => "zip")) }}
					</div>
				</div>
				{{ $errors->first('zip', '<span class="help-block">:message</span>') }}
			</div>

			<div class="mini-container">
				<div class="col-md-2">
				{{ Form::submit('Create Account', array('class' => 'form-control btn btn-primary')) }}
				</div>
			</div>

			{{ Form::close() }}
		</div>
	</div>
</div>



@stop


@section('bottom-script')
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="/assets/js/jquery-2.1.0.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="/assets/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
	
	
		
	
	
	<!-- page scripts -->
	<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/assets/js/jquery.sparkline.min.js"></script>
	<script src="/assets/js/jquery.chosen.min.js"></script>
	<script src="/assets/js/jquery.cleditor.min.js"></script>
	<script src="/assets/js/jquery.autosize.min.js"></script>
	<script src="/assets/js/jquery.placeholder.min.js"></script>
	<script src="/assets/js/jquery.maskedinput.min.js"></script>
	<script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="/assets/js/bootstrap-datepicker.min.js"></script>
	<script src="/assets/js/bootstrap-timepicker.min.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/daterangepicker.min.js"></script>
	<script src="/assets/js/jquery.hotkeys.min.js"></script>
	<script src="/assets/js/bootstrap-wysiwyg.min.js"></script>
	<script src="/assets/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- theme scripts -->
	<script src="/assets/js/custom.min.js"></script>
	<script src="/assets/js/core.min.js"></script>


	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/form-elements.js"></script>

<script>
	$('#gender-male').children().attr('checked', true);

	$('.btn-gender').click({item1: 'gender-male', item2: 'gender-female'}, swapRadio);

</script>

@stop