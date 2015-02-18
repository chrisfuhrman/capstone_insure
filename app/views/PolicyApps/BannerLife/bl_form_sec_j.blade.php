@extends('layouts.master')

@section('content')
<!-- SECTION J PROPOSED INSURED FINANCIAL INFORMATION -->

<h1>PROPOSED INSURED FINANCIAL INFORMATION</h1>

<p>Complete this section when applying for face amount over $1,000,000 or when the Proposed Insured is over age 65:</p>


<div class="row">
	<div class="col-lg-12">
		<div class="box">

<!-- 45.a. What is the purpose of this insurance?
(e.g. income replacement, buy-sell, keyperson, estate conservation) -->

			<div class="form-group">
				{{ Form::label('insurance_purpose', 'What is the purpose of this insurance?:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('insurance_purpose', Input::old('insurance_purpose'), array('class' => 'form-control', 'placeholder' => '(e.g. income replacement, buy-sell, keyperson, estate conservation)', 'id' => 'insurance_purpose', 'name' => 'insurance_purpose')) }}
					</div>
				</div>
				{{ $errors->first('insurance_purpose', '<span class="help-block">:message</span>') }}
			</div>

<!-- b. How was the need for the face amount determined? -->

			<div class="form-group">
				{{ Form::label('face_amount_reason', 'How was the need for the face amount determined?', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('face_amount_reason', Input::old('face_amount_reason'), array('class' => 'form-control', 'placeholder' => 'Total bills, family size, etc', 'id' => 'face_amount_reason', 'name' => 'face_amount_reason')) }}
					</div>
				</div>
				{{ $errors->first('face_amount_reason', '<span class="help-block">:message</span>') }}
			</div>

<!-- c. In the last 5 years, has the Proposed Insured filed for bankruptcy or had any charge off of bad debts?   -->

			<div class="form-group">
				<div>
				{{ Form::label('credit_history', 'If in the last 5 years, the Proposed Insured has filed for bankruptcy or had any charge off of bad debts, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('credit_history', 'yes', false, array('class' => 'form-control', 'id' => 'credit_history', 'name' => 'credit_history')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('credit_history', '<span class="help-block">:message</span>') }}
			</div>

<!-- If Yes, type of bankruptcy and discharge date or charge off date.  -->

			<div class="credit_history_extra">

				<div class="form-group">
					{{ Form::label('type_bankrupty_and_date', 'If Yes, type of bankruptcy and discharge date or charge off date:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('type_bankrupty_and_date', Input::old('type_bankrupty_and_date'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount (if NONE state NONE)', 'id' => 'type_bankrupty_and_date', 'name' => 'type_bankrupty_and_date')) }}
						</div>
					</div>
					{{ $errors->first('type_bankrupty_and_date', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- 46.a. Gross annual earned income (salary, bonuses, etc. from W-2 forms) $  -->

			<div class="form-group">
				{{ Form::label('gross_earned_income', 'Gross annual earned income $', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('gross_earned_income', Input::old('gross_earned_income'), array('class' => 'form-control', 'placeholder' => ' salary, bonuses, etc. from W-2 forms', 'id' => 'gross_earned_income', 'name' => 'gross_earned_income')) }}
					</div>
				</div>
				{{ $errors->first('gross_earned_income', '<span class="help-block">:message</span>') }}
			</div>

<!-- b. Gross annual unearned income (dividends, interest, rental income, etc.) $  -->

			<div class="form-group">
				{{ Form::label('gross_unearned_income', 'Gross annual unearned income $', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('gross_unearned_income', Input::old('gross_unearned_income'), array('class' => 'form-control', 'placeholder' => 'dividends, interest, rental income, etc.', 'id' => 'gross_unearned_income', 'name' => 'gross_unearned_income')) }}
					</div>
				</div>
				{{ $errors->first('gross_unearned_income', '<span class="help-block">:message</span>') }}
			</div>

<!-- c. Is the Proposed Insured self-supporting?   -->

			<div class="form-group">
				<div>
				{{ Form::label('insured_self_supporting', 'If the Proposed is Insured self-supporting, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('insured_self_supporting', 'yes', false, array('class' => 'form-control', 'id' => 'insured_self_supporting', 'name' => 'insured_self_supporting')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('insured_self_supporting', '<span class="help-block">:message</span>') }}
			</div>

<!-- If No, how much insurance is in-force on the life of the person providing the support? $  -->

			<div class="insured_self_supporting_extra">

				<div class="form-group">
					{{ HTML::decode(Form::label('in_force_insurance', 'If No, how much insurance is in-force on the life of the person providing the support? $:', array('class' => 'control-label'))) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('in_force_insurance', Input::old('in_force_insurance'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'in_force_insurance', 'name' => 'in_force_insurance')) }}
						</div>
					</div>
					{{ $errors->first('in_force_insurance', '<span class="help-block">:message</span>') }}
				</div>

<!-- What is that person’s relationship to the Proposed Insured?  -->

				<div class="form-group">
					{{ HTML::decode(Form::label('relationship_to_insured_financial', ':', array('class' => 'control-label'))) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('relationship_to_insured_financial', Input::old('relationship_to_insured_financial'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount (if NONE state NONE)', 'id' => 'relationship_to_insured_financial', 'name' => 'relationship_to_insured_financial')) }}
						</div>
					</div>
					{{ $errors->first('relationship_to_insured_financial', '<span class="help-block">:message</span>') }}
				</div>

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


			$( "#insured_self_supporting" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == false){

					$('.insured_self_supporting_extra').slideDown(900);

				} else {

					$('.insured_self_supporting_extra').slideUp(900);

				}
			});

			$( "#credit_history" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.credit_history_extra').slideDown(900);

				} else {

					$('.credit_history_extra').slideUp(900);

				}
			});

		});	

	</script>

@stop
