@extends('layouts.master')

@section('content')

<!-- SECTION K BUSINESS FINANCIAL INFORMATION -->

<h1>BUSINESS FINANCIAL INFORMATION</h1>

<p>Complete this section when applying for face amount over $1,000,000 and if Beneficiary or Owner is a business:</p>


<div class="row">
	<div class="col-lg-12">
		<div class="box">


<h3>Current YTD</h3> 

47.a. Assets $

			<div class="form-group">
				{{ Form::label('current_assests', 'Assets $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('current_assests', Input::old('current_assests'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'current_assests', 'name' => 'current_assests')) }}
					</div>
				</div>
				{{ $errors->first('current_assests', '<span class="help-block">:message</span>') }}
			</div>

b. Liabilities $

			<div class="form-group">
				{{ Form::label('current_liabilities', 'Liabilities $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('current_liabilities', Input::old('current_liabilities'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'current_liabilities', 'name' => 'current_liabilities')) }}
					</div>
				</div>
				{{ $errors->first('current_liabilities', '<span class="help-block">:message</span>') }}
			</div>

c. Gross Sales $

			<div class="form-group">
				{{ Form::label('current_gross_sales', 'Gross Sales $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('current_gross_sales', Input::old('current_gross_sales'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'current_gross_sales', 'name' => 'current_gross_sales')) }}
					</div>
				</div>
				{{ $errors->first('current_gross_sales', '<span class="help-block">:message</span>') }}
			</div>

d. Net Income after Taxes $

			<div class="form-group">
				{{ Form::label('current_net_income', 'Net Income after Taxes $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('current_net_income', Input::old('current_net_income'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'current_net_income', 'name' => 'current_net_income')) }}
					</div>
				</div>
				{{ $errors->first('current_net_income', '<span class="help-block">:message</span>') }}
			</div>

e. Fair Market Value of the business $

			<div class="form-group">
				{{ Form::label('current_fmv', 'Fair Market Value of the business $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('current_fmv', Input::old('current_fmv'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'current_fmv', 'name' => 'current_fmv')) }}
					</div>
				</div>
				{{ $errors->first('current_fmv', '<span class="help-block">:message</span>') }}
			</div>



<h3>Previous Year</h3> 

47.a. Assets $

			<div class="form-group">
				{{ Form::label('previous_assests', 'Assets $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('previous_assests', Input::old('previous_assests'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'previous_assests', 'name' => 'previous_assests')) }}
					</div>
				</div>
				{{ $errors->first('previous_assests', '<span class="help-block">:message</span>') }}
			</div>

b. Liabilities $

			<div class="form-group">
				{{ Form::label('previous_liabilities', 'Liabilities $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('previous_liabilities', Input::old('previous_liabilities'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'previous_liabilities', 'name' => 'previous_liabilities')) }}
					</div>
				</div>
				{{ $errors->first('previous_liabilities', '<span class="help-block">:message</span>') }}
			</div>

c. Gross Sales $

			<div class="form-group">
				{{ Form::label('previous_gross_sales', 'Gross Sales $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('previous_gross_sales', Input::old('previous_gross_sales'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'previous_gross_sales', 'name' => 'previous_gross_sales')) }}
					</div>
				</div>
				{{ $errors->first('previous_gross_sales', '<span class="help-block">:message</span>') }}
			</div>

d. Net Income after Taxes $

			<div class="form-group">
				{{ Form::label('previous_net_income', 'Net Income after Taxes $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('previous_net_income', Input::old('previous_net_income'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'previous_net_income', 'name' => 'previous_net_income')) }}
					</div>
				</div>
				{{ $errors->first('previous_net_income', '<span class="help-block">:message</span>') }}
			</div>

e. Fair Market Value of the business $

			<div class="form-group">
				{{ Form::label('previous_fmv', 'Fair Market Value of the business $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('previous_fmv', Input::old('previous_fmv'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'previous_fmv', 'name' => 'previous_fmv')) }}
					</div>
				</div>
				{{ $errors->first('previous_fmv', '<span class="help-block">:message</span>') }}
			</div>



f. How long has the business been established? 

			<div class="form-group">
				{{ Form::label('time_business_established', 'How long has the business been established?:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('time_business_established', Input::old('time_business_established'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'time_business_established', 'name' => 'time_business_established')) }}
					</div>
				</div>
				{{ $errors->first('time_business_established', '<span class="help-block">:message</span>') }}
			</div>

g. What percentage of the business does the Proposed Insured own? 

			<div class="form-group">
				{{ Form::label('percentage_of_ownership', 'What percentage of the business does the Proposed Insured own? :', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('percentage_of_ownership', Input::old('percentage_of_ownership'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'percentage_of_ownership', 'name' => 'percentage_of_ownership')) }}
					</div>
				</div>
				{{ $errors->first('percentage_of_ownership', '<span class="help-block">:message</span>') }}
			</div>

h. Are other partners/owners/executives being insured? (If Yes, use Remarks section, Question 48.)  

			<div class="form-group">
				<div>
				{{ Form::label('credit_history', 'If in the last 5 years, the Proposed Insured has filed for bankruptcy or had any charge off of bad debts, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('credit_history', 'yes', null, array('class' => 'form-control', 'id' => 'credit_history', 'name' => 'credit_history')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('credit_history', '<span class="help-block">:message</span>') }}
			</div>

i. In the last 5 years, has the business filed for bankruptcy or had any charge off of bad debts?  

			<div class="form-group">
				<div>
				{{ Form::label('credit_history', 'If in the last 5 years, the Proposed Insured has filed for bankruptcy or had any charge off of bad debts, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('credit_history', 'yes', null, array('class' => 'form-control', 'id' => 'credit_history', 'name' => 'credit_history')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('credit_history', '<span class="help-block">:message</span>') }}
			</div>

If Yes, type of bankruptcy and discharge date or charge off date. 

			<div class="extra">

				<div class="form-group">
					{{ Form::label('', 'What is the purpose of this insurance?:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('', Input::old(''), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => '', 'name' => '')) }}
						</div>
					</div>
					{{ $errors->first('', '<span class="help-block">:message</span>') }}
				</div>
		
			</div>

j. Company web site address, if available 

			<div class="form-group">
				{{ Form::label('', 'What is the purpose of this insurance?:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('', Input::old(''), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => '', 'name' => '')) }}
					</div>
				</div>
				{{ $errors->first('', '<span class="help-block">:message</span>') }}
			</div>

		</div>
	</div>
</div>

<nav>
	<ul class="pager">
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecI') }}}">Previous</a></li>
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecK') }}}">Next</a></li>
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
			$('.credit_history_extra').hide();
			$('.insured_self_supporting_extra').hide();


			$( "#credit_history" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.insured_self_supporting_extra').slideDown(900);

				} else {

					$('.insured_self_supporting_extra').slideUp(900);

				}
			});

			$( "#credit_history" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == false){

					$('.credit_history_extra').slideDown(900);

				} else {

					$('.credit_history_extra').slideUp(900);

				}
			});

		});	

	</script>

@stop