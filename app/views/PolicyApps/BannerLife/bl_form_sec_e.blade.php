@extends('layouts.master')

@section('content')

<!-- SECTION E PAYOR -->

<h1>PAYOR</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">

<!-- 20. Send premium notices to: 
 Insured 
 Owner 
 Other -->

			<div class="form-group">
				{{ Form::label('payor', 'Send Premium Notices To:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('payor', array( 'default' => NULL, 'payor_proposed_insured' => 'Proposed Insured', 'payor_owner' => 'Owner', 'payor_other' => 'Other'), array('class' => 'form-control', 'id' => 'payor')) }}
					</div>
				</div>
				{{ $errors->first('payor', '<span class="help-block">:message</span>') }}
			</div>

<!-- If Other, complete the information below -->
			
			<div class="other_extra">

<!-- Name -->

				<div class="form-group">
					{{ Form::label('other_payor_name', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_name', Input::old('other_payor_name'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'other_payor_name', 'name' => 'other_payor_name')) }}
						</div>
					</div>
					{{ $errors->first('other_payor_name', '<span class="help-block">:message</span>') }}
				</div>

<!-- Relationship to Insured/Owners -->

				<div class="form-group">
					{{ Form::label('other_payor_relationship', 'Relationship to Proposed Insured:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_relationship', Input::old('other_payor_relationship'), array('class' => 'form-control', 'placeholder' => 'Relationship', 'id' => "other_payor_relationship", 'name' => 'other_payor_relationship')) }}
						</div>
					</div>
					{{ $errors->first('other_payor_relationship', '<span class="help-block">:message</span>') }}
				</div>

<!-- Address -->

				<div class="form-group">
					{{ Form::label('other_payor_address', 'Address:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_address', Input::old('other_payor_address'), array('class' => "form-control", 'placeholder' => 'Address', 'id' => "other_payor_address", 'name' => "other_payor_address")) }}
						</div>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_address2', Input::old('other_payor_address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "other_payor_address2", 'name' => "other_payor_address2")) }}
						</div>
					</div>
					{{ $errors->first('other_payor_address', '<span class="help-block">:message</span>') }}
					{{ $errors->first('other_payor_address2', '<span class="help-block">:message</span>') }}
				</div>

<!-- City -->

				<div class="form-group">
					{{ Form::label('other_payor_city', 'City:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_city', Input::old('other_payor_city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "other_payor_city", 'name' => "other_payor_city")) }}
						</div>
					</div>
					{{ $errors->first('other_payor_city', '<span class="help-block">:message</span>') }}
				</div>

<!-- State -->

				<div class="form-group">
					{{ Form::label('other_payor_state', 'State:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_state', Input::old('other_payor_state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "other_payor_state", 'name' => "other_payor_state")) }}
						</div>
					</div>
					{{ $errors->first('other_payor_state', '<span class="help-block">:message</span>') }}
				</div>

<!-- Zip -->

				<div class="form-group">
					{{ Form::label('other_payor_zip', 'Zip:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_zip', Input::old('other_payor_zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "other_payor_zip", 'name' => "other_payor_zip")) }}
						</div>
					</div>
					{{ $errors->first('other_payor_zip', '<span class="help-block">:message</span>') }}
				</div>

<!-- Contact Phone # -->

				<div class="form-group">
					{{ Form::label('other_payor_phone', 'Contact Phone:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_phone', Input::old('other_payor_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => "phone", 'name' => 'other_payor_phone')) }}
						</div>
					</div>
					{{ $errors->first('other_payor_phone', '<span class="help-block">:message</span>') }}
				</div>


<!-- Email address -->

				<div class="form-group">
					{{ Form::label('other_payor_email', 'Email:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_payor_email', Input::old('other_payor_email'), array('class' => 'form-control', 'placeholder' => 'payor@gmail.com', 'id' => "email", 'name' => 'other_payor_email')) }}
						</div>
					</div>
					{{ $errors->first('other_payor_email', '<span class="help-block">:message</span>') }}
				</div>

			</div>
		</div>
	</div>	
</div>

<nav>
	<ul class="pager">
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecC') }}}">Previous</a></li>
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecF') }}}">Next</a></li>
	</ul>
</nav>


@stop





@section('bottom-script')
		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/jquery.chosen.min.js"></script>
	<script src="assets/js/jquery.cleditor.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.min.js"></script>
	<script src="assets/js/jquery.hotkeys.min.js"></script>
	<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->



	<script>

		$(document).ready(function() {
			$('.other_extra').hide();

			function payorVal () {

				var value = $( "#payor" ).val();

				if (value == 'payor_other'){

					$('.other_extra').slideDown(900);

				} else {

					$('.other_extra').slideUp(900);

				}

			}

			$( "select" ).change( payorVal );

		});	

	</script>

@stop
