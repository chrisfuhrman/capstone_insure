@extends('layouts.master')

@section('content')

<h1>INSURANCE APPLIED FOR</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">

 
21. Amount of Insurance $

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

22. Plan of Insurance
			
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

23. Death Benefit Option (if available with Plan): 
 Level Death Benefit 
 Increasing Death Benefit

			<div class="form-group">
				{{ Form::label('gender', 'Gender:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('gender', array('default'=> NULL, 'm' => 'Male', 'f' => 'Female'), array('class' => 'form-control', 'id' => 'gender')) }}
					</div>
				</div>
				{{ $errors->first('gender', '<span class="help-block">:message</span>') }}
			</div>


24. Payment method: 
 Direct Bill 
 Electronic Funds Transfer (EFT)

			<div class="form-group">
				{{ Form::label('gender', 'Gender:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('gender', array('default'=> NULL, 'm' => 'Male', 'f' => 'Female'), array('class' => 'form-control', 'id' => 'gender')) }}
					</div>
				</div>
				{{ $errors->first('gender', '<span class="help-block">:message</span>') }}
			</div>

25. Frequency of premium payment: 
 Single 
 Annual 
 Semi-annual 
 Quarterly 
 Monthly (EFT only)

			<div class="form-group">
				{{ Form::label('gender', 'Gender:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('gender', array('default'=> NULL, 'm' => 'Male', 'f' => 'Female'), array('class' => 'form-control', 'id' => 'gender')) }}
					</div>
				</div>
				{{ $errors->first('gender', '<span class="help-block">:message</span>') }}
			</div> 

27. Will the premiums for this policy be loaned or otherwise financed by an individual(s) or entity other than the Proposed Insured or
immediate family members of the Proposed Insured? 
 Yes  No


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

If Yes, please identify all parties involved and provide copies of all financing agreements or promissory notes and all related side
agreements and schedules. (Provide details in Remarks section, Question 48.)

28. a. Date to Save Age? 
 Yes  No 

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

b. Specific Policy Date? 
 Yes 
 No 

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

Date 

Additional Benefits (if available)

 Waiver of Premium 
 Other 
			<div class="form-group">
				{{ Form::label('gender', 'Gender:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::select('gender', array('default'=> NULL, 'm' => 'Male', 'f' => 'Female'), array('class' => 'form-control', 'id' => 'gender')) }}
					</div>
				</div>
				{{ $errors->first('gender', '<span class="help-block">:message</span>') }}
			</div> 

			<div class="additional_benifits">

description
			
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

amount 
		
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
				
			</div>

		</div>
	</div>
</div>

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



@stop