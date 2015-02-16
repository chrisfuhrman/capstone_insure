@extends('layouts.master')

@section('content')

<!-- SECTION H GENERAL QUESTIONS  -->

<h1>GENERAL QUESTIONS</h1>

<!-- (Explain all Yes answers in Remarks section, Question 48.)
Yes No -->


<div class="row">
	<div class="col-lg-12">
		<div class="box">

<!-- 34. Has any person promised or agreed to give or have they given to any party to the application, any inducement, fee or
compensation as an incentive to purchase the policy?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('incentive_to_purchase', 'Has any person promised or agreed to give or have they given to any party to the application,<br>any inducement, fee or compensation as an incentive to purchase the policy?, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('incentive_to_purchase', 'yes', null, array('class' => 'form-control', 'id' => 'incentive_to_purchase', 'name' => 'incentive_to_purchase')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('incentive_to_purchase', '<span class="help-block">:message</span>') }}
			</div>

			<div class="incentive_extra">

				<div class="form-group">
					{{ Form::label('incentive_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('incentive_remarks', Input::old('incentive_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'incentive_remarks', 'name' => 'incentive_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('incentive_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 35. Has any party to the application ever sold, transferred or assigned any life insurance policy to a third party, such
as a viatical settlement entity, life settlement entity, insurance company, other secondary market provider, or premium
financing entity?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('assigned_to_third_party', 'Has any party to the application ever sold, transferred or assigned any life insurance policy<br>to a third party, such as a viatical settlement entity, life settlement entity, insurance company,<br>other secondary market provider, or premium financing entity?, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('assigned_to_third_party', 'yes', null, array('class' => 'form-control', 'id' => 'assigned_to_third_party', 'name' => 'assigned_to_third_party')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('assigned_to_third_party', '<span class="help-block">:message</span>') }}
			</div>

			<div class="third_party_extra">

				<div class="form-group">
					{{ Form::label('third_party_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('third_party_remarks', Input::old('third_party_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'third_party_remarks', 'name' => 'third_party_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('third_party_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 36. Has any party to the application ever received inducement, fee or compensation as an incentive to purchase, sell,
transfer or assign a policy?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('received_inducement', 'Has any party to the application ever received inducement, fee or compensation as<br>an incentive to purchase, sell, transfer or assign a policy?, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('received_inducement', 'yes', null, array('class' => 'form-control', 'id' => 'received_inducement', 'name' => 'received_inducement')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('received_inducement', '<span class="help-block">:message</span>') }}
			</div>

			<div class="received_inducement_extra">

				<div class="form-group">
					{{ Form::label('received_inducement_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('received_inducement_remarks', Input::old('received_inducement_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'received_inducement_remarks', 'name' => 'received_inducement_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('received_inducement_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 37. In the past 5 years, have you requested or received a Worker’s Compensation, Social Security, or disability
income payment?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('additional_income', 'If you have in the past 5 years, requested or received a Worker’s<br>Compensation, Social Security, or disability income payment , Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('additional_income', 'yes', null, array('class' => 'form-control', 'id' => 'additional_income', 'name' => 'additional_income')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('additional_income', '<span class="help-block">:message</span>') }}
			</div>

			<div class="additional_income_extra">

				<div class="form-group">
					{{ Form::label('additional_income_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('additional_income_remarks', Input::old('additional_income_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'additional_income_remarks', 'name' => 'additional_income_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('additional_income_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 38. Have you ever been convicted of, or are you currently charged with, a felony or misdemeanor, or are you currently
on parole or probation?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('criminal_history', 'If you have ever been convicted of, or are you currently charged with,<br>a felony or misdemeanor, or are you currently on parole or probation , Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('criminal_history', 'yes', null, array('class' => 'form-control', 'id' => 'criminal_history', 'name' => 'criminal_history')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('criminal_history', '<span class="help-block">:message</span>') }}
			</div>

			<div class="criminal_history_extra">

				<div class="form-group">
					{{ Form::label('criminal_history_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('criminal_history_remarks', Input::old('criminal_history_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'criminal_history_remarks', 'name' => 'criminal_history_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('criminal_history_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 39. In the past 5 years, has your driver’s license been suspended or revoked, or have you been convicted of 2 or more
moving violations or accidents?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('driving_history', 'If you have, in the past 5 years, had your driver’s license suspended or revoked,<br>or if you have you been convicted of 2 or more moving violations or accidents, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('driving_history', 'yes', null, array('class' => 'form-control', 'id' => 'driving_history', 'name' => 'driving_history')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('driving_history', '<span class="help-block">:message</span>') }}
			</div>

			<div class="driving_history_extra">

				<div class="form-group">
					{{ Form::label('driving_history_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('driving_history_remarks', Input::old('driving_history_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'driving_history_remarks', 'name' => 'driving_history_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('driving_history_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 40. In the past 5 years, have you been convicted of, or plead guilty or no contest to, driving while impaired, intoxicated,
or under the influence of alcohol or drugs? (If Yes, complete Alcohol/Drug Usage Questionnaire.)   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('dwi_dui_offense', 'If in the past 5 years, you have been convicted of, or plead guilty or no contest to,<br>driving while impaired, intoxicated, or under the influence of alcohol or drugs, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('dwi_dui_offense', 'yes', null, array('class' => 'form-control', 'id' => 'dwi_dui_offense', 'name' => 'dwi_dui_offense')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('dwi_dui_offense', '<span class="help-block">:message</span>') }}
			</div>

			<div class="dwi_dui_offense_extra">

				

			</div>

<!-- 41. Are you a member, or do you intend to become a member, of the armed forces, including the reserves?   -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('military_service', 'If you are you a member, or if you intend to become a member,<br>of the armed forces, including the reserves, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('military_service', 'yes', null, array('class' => 'form-control', 'id' => 'military_service', 'name' => 'military_service')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('military_service', '<span class="help-block">:message</span>') }}
			</div>

			<div class="military_service_extra">

				<div class="form-group">
					{{ Form::label('military_service_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('military_service_remarks', Input::old('military_service_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'military_service_remarks', 'name' => 'military_service_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('military_service_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>
		</div>
	</div>
</div>

<nav>
	<ul class="pager">
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecG') }}}">Previous</a></li>
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecI') }}}">Next</a></li>
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
			$('.incentive_extra').hide();
			$('.third_party_extra').hide();
			$('.received_inducement_extra').hide();
			$('.additional_income_extra').hide();
			$('.driving_history_extra').hide();
			$('.dwi_dui_offense_extra').hide();
			$('.military_service_extra').hide();
			$('.criminal_history_extra').hide();

			$( "#incentive_to_purchase" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.incentive_extra').slideDown(900);

				} else {

					$('.incentive_extra').slideUp(900);

				}
			});

			$( "#assigned_to_third_party" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.third_party_extra').slideDown(900);

				} else {

					$('.third_party_extra').slideUp(900);

				}
			});

			$( "#received_inducement" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.received_inducement_extra').slideDown(900);

				} else {

					$('.received_inducement_extra').slideUp(900);

				}
			});

			$( "#additional_income" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.additional_income_extra').slideDown(900);

				} else {

					$('.additional_income_extra').slideUp(900);

				}
			});

			$( "#driving_history" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.driving_history_extra').slideDown(900);

				} else {

					$('.driving_history_extra').slideUp(900);

				}
			});

			$( "#dwi_dui_offense" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.dwi_dui_offense_extra').slideDown(900);

				} else {

					$('.dwi_dui_offense_extra').slideUp(900);

				}
			});

			$( "#military_service" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.military_service_extra').slideDown(900);

				} else {

					$('.military_service_extra').slideUp(900);

				}
			});

			$( "#criminal_history" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.criminal_history_extra').slideDown(900);

				} else {

					$('.criminal_history_extra').slideUp(900);

				}
			});
		});	

	</script>

@stop