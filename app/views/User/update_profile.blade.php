@extends('layouts.master')


@section('content')


<style>
	.btn-gender input[type="radio"], .btn-smoke input[type="radio"] {
    display: none;
}
</style>

@include('User.profile-head')

<div class="row">
		<div class="col-lg-12">
			<div class="box">

				<h5>Full Legal Name</h5>

				<div class="form-group">
					{{ Form::label('first_name', 'First Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name', 'name' => 'first_name')) }}
						</div>
					</div>
					{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
				</div>	

				<div class="form-group">
					{{ Form::label('middle_name', 'Middle Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('middle_name', Input::old('middle_name'), array('class' => 'form-control', 'placeholder' => 'Middle Name', 'id' => 'middle_name', 'name' => 'middle_name')) }}
						</div>
					</div>
					{{ $errors->first('middle_name', '<span class="help-block">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('last_name', 'Last Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name', 'name' => 'last_name')) }}
						</div>
					</div>
					{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('maiden_name', 'Maiden Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('maiden_name', Input::old('maiden_name'), array('class' => 'form-control', 'placeholder' => 'Maiden Name', 'id' => 'maiden_name', 'name' => 'maiden_name')) }}
						</div>
					</div>
					{{ $errors->first('maiden_name', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 2. Gender  -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="verify-gender">Gender</label>
					<div class="input-group col-sm-4 input-group-2">
					<div class="btn-group" id="verify-gender">
						<label class="btn-gender btn btn-mini btn-info" id="gender-confirm-male" for="">
							{{Form::radio('verify-gender', 'M') }} Male
						</label>
						<label class="btn-gender btn btn-mini btn-default" id="gender-confirm-female" for="">
							{{Form::radio('verify-gender', 'F') }} Female
						</label>
					</div>
					</div>
				</div>
				</div>

				<!-- 3. Date of Birth  -->

				<div class="form-group">
					{{ Form::label('dob', 'Date of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'dob')) }}
						</div>
					</div>
					{{ $errors->first('dob', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 6. Phone Numbers  -->

				<!-- Work ( )  -->

				<div class="form-group">
					{{ Form::label('work_phone', 'Work Phone:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
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
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('home_phone', Input::old('home_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => 'phone', 'name' => 'home_phone')) }}
						</div>
					</div>
					{{ $errors->first('home_phone', '<span class="help-block">:message</span>') }}
				</div>

			{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}  
			{{ Form::close() }}

		</div>
	</div>
</div>
@stop

@section('bottom-script')
<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="/assets/js/jquery-2.1.0.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>





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
	 	window.jQuery || document.write("<script src='/assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	
		
	
	
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
	

	<script src="/assets/js/stickUp.min.js"></script>
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/ui-sliders-progress.js"></script>
	
	<!-- theme scripts -->
	<script src="/assets/js/custom.min.js"></script>
	<script src="/assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->


<script>

	$('#verify-address-block').hide();

	$('#btn-confirm-male').children().attr('checked', true);
	$('#address-confirm-yes').children().attr('checked', true);

	$( "#verify-address" ).on('click', function(){
		var value = $('input:radio[name=verify-address]:checked').val();

		if (value == 'no'){

			$('#verify-address-block').slideDown(900);

		} else {

			$('#verify-address-block').slideUp(900);

		}
	});

	$('.btn-gender').click({item1: 'gender-confirm-male', item2: 'gender-confirm-female'}, swapRadio);
	$('.btn-verify-address').click({item1: 'address-confirm-yes', item2: 'address-confirm-no'}, swapRadio);

</script>	




@stop

