@extends('layouts.master')

@section('content')

<!-- SECTION F INSURANCE APPLIED FOR -->

<h1>INSURANCE APPLIED FOR</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">

 
<!-- 21. Amount of Insurance $ -->

			<div class="form-group">
				{{ Form::label('amount_of_insurance', 'Amount of Insurance $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('amount_of_insurance', Input::old('amount_of_insurance'), array('class' => 'form-control', 'placeholder' => 'Dollar amount', 'id' => 'amount_of_insurance', 'name' => 'amount_of_insurance')) }}
					</div>
				</div>
				{{ $errors->first('amount_of_insurance', '<span class="help-block">:message</span>') }}
			</div>

<!-- 22. Plan of Insurance -->
			
			<div class="form-group">
				{{ Form::label('insurance_plan', 'Plan of Insurance:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('insurance_plan', Input::old('insurance_plan'), array('class' => 'form-control', 'placeholder' => 'Insurance Plan', 'id' => 'insurance_plan', 'name' => 'insurance_plan')) }}
					</div>
				</div>
				{{ $errors->first('insurance_plan', '<span class="help-block">:message</span>') }}
			</div>

<!-- 23. Death Benefit Option (if available with Plan): 
 Level Death Benefit 
 Increasing Death Benefit -->

			<div class="form-group">
				{{ Form::label('death_benefit_option', 'Death Benefit Option (If available):', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('death_benefit_option', array('default'=> NULL, 'level_death_benifit' => 'Level Death Benefit', 'increasing_death_benefit' => 'Increasing Death Benefit'), array('class' => 'form-control', 'id' => 'death_benefit_option')) }}
					</div>
				</div>
				{{ $errors->first('death_benefit_option', '<span class="help-block">:message</span>') }}
			</div>


<!-- 24. Payment method: 
 Direct Bill 
 Electronic Funds Transfer (EFT) -->

			<div class="form-group">
				{{ Form::label('payment_method', 'Payment Method:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('payment_method', array('default'=> NULL, 'direct_bill' => 'Direct Bill', 'electronic_funds_transfer' => 'Electronic Funds Transfer (EFT)'), array('class' => 'form-control', 'id' => 'payment_method')) }}
					</div>
				</div>
				{{ $errors->first('payment_method', '<span class="help-block">:message</span>') }}
			</div>

<!-- 25. Frequency of premium payment: 
 Single 
 Annual 
 Semi-annual 
 Quarterly 
 Monthly (EFT only) -->

			<div class="form-group">
				{{ Form::label('payment_frequency', 'Frequency of Premium Payment:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('payment_frequency', array('default'=> NULL, 'single_payment' => 'Single', 'annual_payment' => 'Annual', 'semi_annual_payment' => 'Semi-annual', 'quarterly_payment' => 'Quarterly', 'monthly_payment' => 'Monthly (EFT)'), array('class' => 'form-control', 'id' => 'payment_frequency')) }}
					</div>
				</div>
				{{ $errors->first('payment_frequency', '<span class="help-block">:message</span>') }}
			</div> 

<!-- 27. Will the premiums for this policy be loaned or otherwise financed by an individual(s) or entity other than the Proposed Insured or
immediate family members of the Proposed Insured? 
 Yes  No -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('loaned_financed_payment', 'If the premiums for this policy will be loaned or otherwise financed by an individual(s)<br>or entity other than the Proposed Insured or immediate family members of the Proposed Insured, Check box:', array('class' => 'control-label'))) }}	
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('loaned_financed_payment', 'yes', null, array('class' => 'form-control', 'id' => 'loaned_financed_payment', 'name' => 'loaned_financed_payment')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('loaned_financed_payment', '<span class="help-block">:message</span>') }}
			</div>

<!-- If Yes, please identify all parties involved and provide copies of all financing agreements or promissory notes and all related side
agreements and schedules. (Provide details in Remarks section, Question 48.) -->

			<div class="premium_extra">

				<div class="form-group">
					{{ Form::label('payor_remarks', 'Additional Remarks:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('payor_remarks', Input::old('payor_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'payor_remarks', 'name' => 'payor_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('payor_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 28. a. Date to Save Age? 
 Yes  No  -->

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('date_to_save_age', 'If you want us to review your age at the time of application<br>to see if we can save you money by backdating, check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('date_to_save_age', 'yes', null, array('class' => 'form-control', 'id' => 'date_to_save_age', 'name' => 'date_to_save_age')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('date_to_save_age', '<span class="help-block">:message</span>') }}
			</div>

<!-- b. Specific Policy Date? 
 Yes 
 No --> 

			<div class="form-group">
				<div>
					{{ HTML::decode(Form::label('specific_policy_date', 'If you would like to specify the date your policy would start, check box,<br>otherwise policy start date with be date of approval', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('specific_policy_date', 'yes', null, array('class' => 'form-control', 'id' => 'specific_policy_date', 'name' => 'specific_policy_date')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('specific_policy_date', '<span class="help-block">:message</span>') }}
			</div>

<!-- Date  -->

			<div class="policy_date_extra">

				<div class="form-group">
					{{ Form::label('policy_date', 'Date:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('policy_date', Input::old('policy_date'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'policy_date')) }}
						</div>
					</div>
					{{ $errors->first('policy_date', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- Additional Benefits (if available)

 Waiver of Premium 
 Other --> 
			<div class="form-group">
				{{ Form::label('additional_benifits', 'Additional Benefits:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('additional_benifits', array('default'=> NULL, 'wavier_of_premium' => 'Waiver of Premium', 'other_benifits' => 'Other'), array('class' => 'form-control', 'id' => 'additional_benifits')) }}
					</div>
				</div>
				{{ $errors->first('additional_benifits', '<span class="help-block">:message</span>') }}
			</div> 

			<div class="additional_benifits_extra">

<!-- description -->
			
				<div class="form-group">
					{{ Form::label('description_additional', 'Description:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('description_additional', Input::old('description_additional'), array('class' => 'form-control', 'placeholder' => 'Description', 'id' => 'description_additional', 'name' => 'description_additional')) }}
						</div>
					</div>
					{{ $errors->first('description_additional', '<span class="help-block">:message</span>') }}
				</div>

<!-- amount  -->
		
				<div class="form-group">
					{{ Form::label('amount_additional', 'Amount:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('amount_additional', Input::old('amount_additional'), array('class' => 'form-control', 'placeholder' => 'Amount', 'id' => 'amount_additional', 'name' => 'amount_additional')) }}
						</div>
					</div>
					{{ $errors->first('amount_additional', '<span class="help-block">:message</span>') }}
				</div>
				
			</div>

		</div>
	</div>
</div>

<nav>
	<ul class="pager">
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecE') }}}">Previous</a></li>
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecG') }}}">Next</a></li>
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
			$('.additional_benifits_extra').hide();
			$('.premium_extra').hide();
			$('.policy_date_extra').hide();


			$( "#loaned_financed_payment" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.premium_extra').slideDown(900);

				} else {

					$('.premium_extra').slideUp(900);

				}
			});


			$( "#specific_policy_date" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.policy_date_extra').slideDown(900);

				} else {

					$('.policy_date_extra').slideUp(900);

				}
			});


			function additionalVal () {

				var value = $( "#additional_benifits" ).val();
				if (value == 'other_benifits'){

					$('.additional_benifits_extra').slideDown(900);

				} else {

					$('.additional_benifits_extra').slideUp(900);

				}

			}
			$( "select" ).change( additionalVal );

		});

	</script>


@stop