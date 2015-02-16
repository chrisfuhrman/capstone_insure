@extends('layouts.master')

@section('content')

SECTION I OTHER ACTIVITIES 


<h1>OTHER ACTIVITIES</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">

<!-- 42. Do you hold a current pilot license, or have you in the past 5 years flown, or within the next 2 years do you intend
to fly, other than as a passenger in any type of aircraft? (If Yes, complete Aviation Questionnaire.)   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('pilots_license', 'Do you hold a current pilot license, or have you in the past 5 years flown, or within the next 2 years do you intend to fly, other than as a passenger in any type of aircraft?, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('pilots_license', 'yes', null, array('class' => 'form-control', 'id' => 'pilots_license', 'name' => 'pilots_license')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('pilots_license', '<span class="help-block">:message</span>') }}
			</div>

			<div class="pilots_license_extra">


			</div>

<!-- 43. Have you in the past 2 years engaged in, or within the next 2 years do you intend to engage in, certain activities
such as hang gliding, hot-air ballooning, ultra-light flying, heli-skiing, mountain, ice or rock climbing, cliff or base
jumping, motor vehicle racing, motorcycle or any other motorized land or water vehicle racing, or scuba or sky
diving? (If Yes, complete appropriate questionnaire.)   -->

			<div class="form-group">
				<div>
				{{ HTML::decode(Form::label('extreme_activites', 'If you have in the past 2 years engaged in, or within the next 2 years intend to engage in,<br>certain activities such as hang gliding, hot-air ballooning, ultra-light flying, heli-skiing, mountain,<br>ice or rock climbing, cliff or base jumping, motor vehicle racing, motorcycle or any other<br>motorized land or water vehicle racing, or scuba or sky diving, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('extreme_activites', 'yes', null, array('class' => 'form-control', 'id' => 'extreme_activites', 'name' => 'extreme_activites')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('extreme_activites', '<span class="help-block">:message</span>') }}
			</div>

			<div class="extreme_activites_extra">


			</div>

<!-- 44. Do you intend to travel outside the U.S. or Canada, or change your country of residence in the next 12 months?
(If Yes, list countries, cities, duration and purpose of travel in Remarks section, Question 48.)   -->

			<div class="form-group">
				<div>
				{{ HTML::decode(Form::label('foreign_travel', 'If you intend to travel outside the U.S. or Canada, or change your country of residence in the next 12 months, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('foreign_travel', 'yes', null, array('class' => 'form-control', 'id' => 'foreign_travel', 'name' => 'foreign_travel')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('foreign_travel', '<span class="help-block">:message</span>') }}
			</div>

			<div class="foreign_travel_extra">

				<div class="form-group">
					{{ Form::label('foreign_travel_remarks', 'If yes list countries, cities, duration and purpose of travel in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('foreign_travel_remarks', Input::old('foreign_travel_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'foreign_travel_remarks', 'name' => 'foreign_travel_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('foreign_travel_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>
		</div>
	</div>
</div>


<nav>
	<ul class="pager">
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecH') }}}">Previous</a></li>
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecJ') }}}">Next</a></li>
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
			$('.pilots_license_extra').hide();
			$('.extreme_activites_extra').hide();
			$('.foreign_travel_extra').hide();


			$( "#pilots_license" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.pilots_license_extra').slideDown(900);

				} else {

					$('.pilots_license_extra').slideUp(900);

				}
			});

			$( "#extreme_activites" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.extreme_activites_extra').slideDown(900);

				} else {

					$('.extreme_activites_extra').slideUp(900);

				}
			});

			$( "#foreign_travel" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.foreign_travel_extra').slideDown(900);

				} else {

					$('.foreign_travel_extra').slideUp(900);

				}
			});

		});	

	</script>

@stop

