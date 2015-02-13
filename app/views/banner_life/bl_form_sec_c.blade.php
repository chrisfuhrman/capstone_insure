@extends('layouts.master')

@section('content')



<!--  Complete if the Proposed Insured is not the Owner. 
 (If contingent Owner is required, use Remarks section, Question 48). -->

<h1>OWNER</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">

<!-- Owner is  Proposed Insured  Trust (also complete Section D)  Other than Proposed Insured or Trust -->

			<div class="form-group">
				{{ Form::label('owner', 'Select Owner Type:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('owner', array( 'default' => NULL, 'proposed_insured' => 'Proposed Insured', 'trust' => 'Trust', 'other' => 'Other'), array('class' => 'form-control', 'id' => 'owner')) }}
					</div>
				</div>
				{{ $errors->first('owner', '<span class="help-block">:message</span>') }}
			</div>

			<div class="trust_extra">

@include('banner_life.bl_form_sec_d')

<!-- Address -->

				<div class="form-group">
					{{ Form::label('trust_address', 'Address:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('trust_address', Input::old('trust_address'), array('class' => "form-control", 'placeholder' => 'Address', 'id' => "trust_address", 'name' => "trust_address")) }}
						</div>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('trust_address2', Input::old('trust_address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "trust_address2", 'name' => "trust_address2")) }}
						</div>
					</div>
					{{ $errors->first('trust_address', '<span class="help-block">:message</span>') }}
					{{ $errors->first('trust_address2', '<span class="help-block">:message</span>') }}
				</div>

<!-- City -->

				<div class="form-group">
					{{ Form::label('trust_city', 'City:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('trust_city', Input::old('trust_city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "trust_city", 'name' => "trust_city")) }}
						</div>
					</div>
					{{ $errors->first('trust_city', '<span class="help-block">:message</span>') }}
				</div>

<!-- State -->

				<div class="form-group">
					{{ Form::label('trust_state', 'State:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('trust_state', Input::old('trust_state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "trust_state", 'name' => "trust_state")) }}
						</div>
					</div>
					{{ $errors->first('trust_state', '<span class="help-block">:message</span>') }}
				</div>

<!-- Zip -->

				<div class="form-group">
					{{ Form::label('trust_zip', 'Zip:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('trust_zip', Input::old('trust_zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "trust_zip", 'name' => "trust_zip")) }}
						</div>
					</div>
					{{ $errors->first('trust_zip', '<span class="help-block">:message</span>') }}
				</div>

<!-- Contact Phone # -->

				<div class="form-group">
					{{ Form::label('trust_phone', 'Contact Phone:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('trust_phone', Input::old('trust_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => "phone", 'name' => 'trust_phone')) }}
						</div>
					</div>
					{{ $errors->first('trust_phone', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- OTHER -->

			<div class="other_extra">

<!-- Name -->

				<div class="form-group">
					{{ Form::label('other_owner_name', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_name', Input::old('other_owner_name'), array('class' => 'form-control', 'placeholder' => 'Other_owner Name', 'id' => 'other_owner_name', 'name' => 'other_owner_name')) }}
						</div>
					</div>
					{{ $errors->first('other_owner_name', '<span class="help-block">:message</span>') }}
				</div>
			
<!-- Relationship to Proposed Insured -->

				<div class="form-group">
					{{ Form::label('other_owner_relationship', 'Relationship to Proposed Insured:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_relationship', Input::old('other_owner_relationship'), array('class' => 'form-control', 'placeholder' => 'Relationship', 'id' => "other_owner_relationship", 'name' => 'other_owner_relationship')) }}
						</div>
					</div>
					{{ $errors->first('other_owner_relationship', '<span class="help-block">:message</span>') }}
				</div>

<!-- If Owner is a business -->

	<div class="form-group">
				<div>
				{{ Form::label('business', 'Is the Owner a Business?:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('business', 'business', false, array('class' => 'switch-input', 'id' => 'business')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('business', '<span class="help-block">:message</span>') }}
			</div>

	
<!-- Date of Birth  -->
				<div class="business_remove">

					<div class="form-group">
						{{ Form::label('other_owner_date_of_birth', 'Date of Birth:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('other_owner_date_of_birth', Input::old('other_owner_date_of_birth'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date2', 'name' => 'other_owner_date_of_birth')) }}
							</div>
						</div>
						{{ $errors->first('other_owner_date_of_birth', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- web site address -->
				
				<div class="business_extra">

					<div class="form-group">
						{{ Form::label('business_website', 'Business Website:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('business_website', Input::old('business_website'), array('class' => 'form-control', 'placeholder' => 'business.com', 'id' => "business_website", 'name' => 'business_website')) }}
							</div>
						</div>
						{{ $errors->first('business_website', '<span class="help-block">:message</span>') }}
					</div>

<!-- Email address -->

					<div class="form-group">
						{{ Form::label('business_email', 'Business Email:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('business_email', Input::old('business_email'), array('class' => 'form-control', 'placeholder' => 'business@gmail.com', 'id' => "email", 'name' => 'business_email')) }}
							</div>
						</div>
						{{ $errors->first('business_email', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- SSN -->

				<div class="form-group">
					{{ Form::label('other_owner_id', 'Social Security, Or Tax ID:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_id', Input::old('other_owner_id'), array('class' => 'form-control', 'placeholder' => '999-99-9999', 'id' => 'ssn', 'name' => 'other_owner_id')) }}
						</div>
					</div>
					{{ $errors->first('other_owner_id', '<span class="help-block">:message</span>') }}
				</div>

<!-- Address -->

				<div class="form-group">
					{{ Form::label('other_owner_address', 'Address:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_address', Input::old('other_owner_address'), array('class' => "form-control", 'placeholder' => 'Address', 'id' => "other_owner_address", 'name' => "other_owner_address")) }}
						</div>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_address2', Input::old('other_owner_address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "other_owner_address2", 'name' => "other_owner_address2")) }}
						</div>
					</div>
					{{ $errors->first('other_owner_address', '<span class="help-block">:message</span>') }}
					{{ $errors->first('other_owner_address2', '<span class="help-block">:message</span>') }}
				</div>

<!-- City -->

				<div class="form-group">
					{{ Form::label('other_owner_city', 'City:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_city', Input::old('other_owner_city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "other_owner_city", 'name' => "other_owner_city")) }}
						</div>
					</div>
					{{ $errors->first('other_owner_city', '<span class="help-block">:message</span>') }}
				</div>

<!-- State -->

				<div class="form-group">
					{{ Form::label('other_owner_state', 'State:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_state', Input::old('other_owner_state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "other_owner_state", 'name' => "other_owner_state")) }}
						</div>
					</div>
					{{ $errors->first('other_owner_state', '<span class="help-block">:message</span>') }}
				</div>

<!-- Zip -->

				<div class="form-group">
					{{ Form::label('other_owner_zip', 'Zip:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_zip', Input::old('other_owner_zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "other_owner_zip", 'name' => "other_owner_zip")) }}
						</div>
					</div>
					{{ $errors->first('other_owner_zip', '<span class="help-block">:message</span>') }}
				</div>

<!-- Contact Phone # -->

				<div class="form-group">
					{{ Form::label('other_owner_phone', 'Contact Phone:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_owner_phone', Input::old('other_owner_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => "phone2", 'name' => 'other_owner_phone')) }}
						</div>
					</div>
					{{ $errors->first('other_owner_phone', '<span class="help-block">:message</span>') }}
				</div>

			</div>

		</div>
	</div>
</div>

<nav>
  <ul class="pager">
    <li><a href="{{{ action('PolicyAppController@showLifeAppSecB') }}}">Previous</a></li>
    <li><a href="{{{ action('PolicyAppController@showLifeAppSecE') }}}">Next</a></li>
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
			$('.trust_extra').hide();
			$('.other_extra').hide();
			$('.business_extra').hide();
			$('.business_remove').show();
			



			function ownerVal () {

				var value = $( "#owner" ).val();
				if (value == 'trust'){

					$('.trust_extra').slideDown(900);
					$('.other_extra').slideUp(900);

				} else if (value == 'other'){

					$('.other_extra').slideDown(900);
					$('.trust_extra').slideUp(900);

				} else {

					$('.trust_extra').slideUp(900);
					$('.other_extra').slideUp(900);

				}

			}
			$( "select" ).change( ownerVal );


				$( "#business" ).on('click', function(){
					var value = $(this).prop( 'checked' );

					if (value == true){

						$('.business_extra').slideDown(900);
						$('.business_remove').slideUp(900);

					} else {

						$('.business_extra').slideUp(900);
						$('.business_remove').slideDown(900);

					}
				});


		});

	</script>



@stop




