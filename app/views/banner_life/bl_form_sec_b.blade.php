@extends('layouts.master')

@section('content')

<h1>BENEFICIARY</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
 

			<div class="form-group">
				{{ HTML::decode(Form::label('beneficiary_trust', '<h3>If Beneficiary is a trust, check box:</h3>', array('class' => 'control-label'))) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::checkbox('beneficiary_trust', 'yes', null, array('class' => 'form-control', 'id' => 'beneficiary_trust', 'name' => 'beneficiary_trust')) }}
					</div>
				</div>
				{{ $errors->first('beneficiary_trust', '<span class="help-block">:message</span>') }}
			</div>

			<div class="sec_d"> 

			 @include('banner_life.bl_form_sec_d')

			</div>

			<div class="primary_insured">


				<h3>Primary</h3>

				 
				<!-- Name   -->

				<div class="form-group">
					{{ Form::label('primary_name', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_name', Input::old('primary_name'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'primary_name', 'name' => 'primary_name')) }}
						</div>
					</div>
					{{ $errors->first('primary_name', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Relationship   -->

				<div class="form-group">
					{{ Form::label('primary_relationship', 'Relationship:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_relationship', Input::old('primary_relationship'), array('class' => 'form-control', 'placeholder' => 'Relationship', 'id' => 'primary_relationship', 'name' => 'primary_relationship')) }}
						</div>
					</div>
					{{ $errors->first('primary_relationship', '<span class="help-block">:message</span>') }}
				</div>

				<!-- % Share  -->

				<h5>Share percentage totals must equal 100%</h5>

				<div class="form-group">
					{{ Form::label('primary_share', 'Percent of Share:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_share', Input::old('primary_share'), array('class' => 'form-control', 'placeholder' => 'Ex: 50', 'id' => 'primary_share', 'name' => 'primary_share')) }}
						</div>
					</div>
					{{ $errors->first('primary_share', '<span class="help-block">:message</span>') }}
				</div>

				<!-- SSN   -->

				<div class="form-group">
					{{ Form::label('primary_ssn', 'Social Security:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_ssn', Input::old('primary_ssn'), array('class' => 'form-control', 'placeholder' => '999-99-9999', 'id' => 'ssn', 'name' => 'primary_ssn')) }}
						</div>
					</div>
					{{ $errors->first('primary_ssn', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Date of Birth  -->

				<div class="form-group">
					{{ Form::label('primary_date_of_birth', 'Date of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_date_of_birth', Input::old('primary_date_of_birth'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'primary_date_of_birth')) }}
						</div>
					</div>
					{{ $errors->first('primary_date_of_birth', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Name -->

				<div class="form-group">
					{{ Form::label('primary_name2', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_name2', Input::old('primary_name2'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'primary_name2', 'name' => 'primary_name2')) }}
						</div>
					</div>
					{{ $errors->first('primary_name2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Relationship -->

				<div class="form-group">
					{{ Form::label('primary_relationship2', 'Relationship:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_relationship2', Input::old('primary_relationship2'), array('class' => 'form-control', 'placeholder' => 'Relationship', 'id' => 'primary_relationship2', 'name' => 'primary_relationship2')) }}
						</div>
					</div>
					{{ $errors->first('primary_relationship2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- % Share  -->

				<h5>Share percentage totals must equal 100%</h5>

				<div class="form-group">
					{{ Form::label('primary_share2', 'Percent of Share:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_share2', Input::old('primary_share2'), array('class' => 'form-control', 'placeholder' => 'Ex: 50', 'id' => 'primary_share2', 'name' => 'primary_share2')) }}
						</div>
					</div>
					{{ $errors->first('primary_share2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- SSN -->

				<div class="form-group">
					{{ Form::label('primary_ssn2', 'Social Security:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_ssn2', Input::old('primary_ssn2'), array('class' => 'form-control', 'placeholder' => '999-99-9999', 'id' => 'ssn2', 'name' => 'primary_ssn2')) }}
						</div>
					</div>
					{{ $errors->first('primary_ssn2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Date of Birth  -->

				<div class="form-group">
					{{ Form::label('primary_date_of_birth2', 'Date of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_date_of_birth2', Input::old('primary_date_of_birth2'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date2', 'name' => 'primary_date_of_birth2')) }}
						</div>
					</div>
					{{ $errors->first('primary_date_of_birth2', '<span class="help-block">:message</span>') }}
				</div>







				<h3>Contingent</h3>
				 
				<!-- Name   -->

				<div class="form-group">
					{{ Form::label('contingent_name', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_name', Input::old('contingent_name'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'contingent_name', 'name' => 'contingent_name')) }}
						</div>
					</div>
					{{ $errors->first('contingent_name', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Relationship   -->

				<div class="form-group">
					{{ Form::label('contingent_relationship', 'Relationship:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_relationship', Input::old('contingent_relationship'), array('class' => 'form-control', 'placeholder' => 'Relationship', 'id' => 'contingent_relationship', 'name' => 'contingent_relationship')) }}
						</div>
					</div>
					{{ $errors->first('contingent_relationship', '<span class="help-block">:message</span>') }}
				</div>

				<!-- % Share  -->

				<h5>Share percentage totals must equal 100%</h5>

				<div class="form-group">
					{{ Form::label('contingent_share', 'Percent of Share:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_share', Input::old('contingent_share'), array('class' => 'form-control', 'placeholder' => 'Ex: 50', 'id' => 'contingent_share', 'name' => 'contingent_share')) }}
						</div>
					</div>
					{{ $errors->first('contingent_share', '<span class="help-block">:message</span>') }}
				</div>

				<!-- SSN   -->

				<div class="form-group">
					{{ Form::label('contingent_ssn', 'Social Security:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_ssn', Input::old('contingent_ssn'), array('class' => 'form-control', 'placeholder' => '999-99-9999', 'id' => 'ssn3', 'name' => 'contingent_ssn')) }}
						</div>
					</div>
					{{ $errors->first('contingent_ssn', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Date of Birth  -->

				<div class="form-group">
					{{ Form::label('contingent_date_of_birth', 'Date of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_date_of_birth', Input::old('contingent_date_of_birth'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date3', 'name' => 'contingent_date_of_birth')) }}
						</div>
					</div>
					{{ $errors->first('contingent_date_of_birth', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Name -->

				<div class="form-group">
					{{ Form::label('contingent_name2', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_name2', Input::old('contingent_name2'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'contingent_name2', 'name' => 'contingent_name2')) }}
						</div>
					</div>
					{{ $errors->first('contingent_name2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Relationship -->

				<div class="form-group">
					{{ Form::label('contingent_relationship2', 'Relationship:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_relationship2', Input::old('contingent_relationship2'), array('class' => 'form-control', 'placeholder' => 'Relationship', 'id' => 'contingent_relationship2', 'name' => 'contingent_relationship2')) }}
						</div>
					</div>
					{{ $errors->first('contingent_relationship2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- % Share  -->

				<h5>Share percentage totals must equal 100%</h5>

				<div class="form-group">
					{{ Form::label('contingent_share2', 'Percent of Share:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_share2', Input::old('contingent_share2'), array('class' => 'form-control', 'placeholder' => 'Ex: 50', 'id' => 'contingent_share2', 'name' => 'contingent_share2')) }}
						</div>
					</div>
					{{ $errors->first('contingent_share2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- SSN -->

				<div class="form-group">
					{{ Form::label('contingent_ssn2', 'Social Security:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_ssn2', Input::old('contingent_ssn2'), array('class' => 'form-control', 'placeholder' => '999-99-9999', 'id' => 'ssn4', 'name' => 'contingent_ssn2')) }}
						</div>
					</div>
					{{ $errors->first('contingent_ssn2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Date of Birth  -->

				<div class="form-group">
					{{ Form::label('contingent_date_of_birth2', 'Date of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('contingent_date_of_birth2', Input::old('contingent_date_of_birth2'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date4', 'name' => 'contingent_date_of_birth2')) }}
						</div>
					</div>
					{{ $errors->first('contingent_date_of_birth2', '<span class="help-block">:message</span>') }}
				</div>
			</div>		
		</div>
	</div>	
</div>


<nav>
  <ul class="pager">
    <li><a href="{{{ action('PolicyAppController@showLifeAppSecA') }}}">Previous</a></li>  	
    <li><a href="{{{ action('PolicyAppController@showLifeAppSecC') }}}">Next</a></li>
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
			$('.sec_d').hide();


			$( "#beneficiary_trust" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.sec_d').slideDown(900);
					$('.primary_insured').slideUp(900);

				} else {

					$('.sec_d').slideUp(900);
					$('.primary_insured').slideDown(900);

				}
			});
		});

	</script>



@stop