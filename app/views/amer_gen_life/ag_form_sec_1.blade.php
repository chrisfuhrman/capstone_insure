@extends('layouts.master')

<!-- 
 -->


@section('content')

<h3>1. Primary Proposed Insured</h3>
<form>
<div class="form-group">
	<label class="control-label" for="name">Name</label>
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			<input type="text" id="name" class="form-control">
		</div>
	</div>
</div>
</form>

<div class="row">
	<div class="col-lg-12">
		<div class="box">


<!-- 1. Full Name (Include maiden name in parentheses)  -->

<div class="form-group">
	{{ Form::label('name', 'Full Name (Include maiden name in parentheses):', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'name', 'name' => 'name')) }}
		</div>
	</div>
	{{ $errors->first('name', '<span class="help-block">:message</span>') }}
</div>	

<!-- 2. Sex  -->

<div class="form-group">
	{{ Form::label('gender', 'Gender:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::checkbox('male', '1', array('class' => 'form-control', 'id' => 'gender', 'name' => 'male')) }}
		</div>
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>		
			{{ Form::checkbox('female', '2', array('class' => 'form-control', 'id' => 'gender', 'name' => 'female')) }}
		</div>
	</div>
	{{ $errors->first('gender', '<span class="help-block">:message</span>') }}
</div>

<!-- 3. Date of Birth  -->

<div class="form-group">
	{{ Form::label('date_of_birth', 'Date of Birth:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'date_of_birth')) }}
		</div>
	</div>
	{{ $errors->first('date_of_birth', '<span class="help-block">:message</span>') }}
</div>

<!-- 4. Social Security Number -->
	
<div class="form-group">
	{{ Form::label('ssn', 'Social Security #:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('ssn', Input::old('ssn'), array('class' => "form-control", 'placeholder' => 'Social Security', 'id' => "ssn", 'name' => "ssn")) }}
		</div>
	</div>
	{{ $errors->first('ssn', '<span class="help-block">:message</span>') }}
</div>

<!-- 5. a. Home Address 
Street______________________________________ --> 

<div class="form-group">
	{{ Form::label('address', 'Address:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('address', Input::old('address'), array('class' => "form-control", 'placeholder' => '1234 Somewhere St', 'id' => "address", 'name' => "address")) }}
		</div>
	</div>
	{{ $errors->first('address', '<span class="help-block">:message</span>') }}
</div>

<!-- City, State _________________________  -->	

<div class="form-group">
	{{ Form::label('city_state', 'City, State:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('city_state', Input::old('city_state'), array('class' => "form-control", 'placeholder' => 'City, State', 'id' => "city_state", 'name' => "city_state")) }}
		</div>
	</div>
	{{ $errors->first('city_state', '<span class="help-block">:message</span>') }}
</div>

<!-- ZIP __________________ -->

<div class="form-group">
	{{ Form::label('zip', 'Zip:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('zip', Input::old('zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "zip", 'name' => "zip")) }}
		</div>
	</div>
	{{ $errors->first('zip', '<span class="help-block">:message</span>') }}
</div>

<!-- 5. b. How Long -->

<div class="form-group">
	{{ Form::label('length_of_residence', 'How Long:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('length_of_residence', Input::old('length_of_residence'), array('class' => 'form-control', 'placeholder' => 'X Years', 'id' => 'length_of_residence', 'name' => 'length_of_residence')) }}
		</div>
	</div>
	{{ $errors->first('length_of_residence', '<span class="help-block">:message</span>') }}
</div>

<!-- 6. Phone Numbers  -->

<!-- Home ( ) -->

<div>
	{{ Form::label('hm_phone', 'Home Phone:') }}
	{{ Form::text('hm_phone', Input::old('hm_phone'), array('class' => 'form-control', 'placeholder' => '###-###-####')) }}
	{{ $errors->first('phone', '<span class="help-block">:message</span>') }}
</div>	

<div class="form-group">
	{{ Form::label('hm_phone', 'Home Phone:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('hm_phone', Input::old('hm_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => 'phone', 'name' => 'hm_phone')) }}
		</div>
	</div>
	{{ $errors->first('hm_phone', '<span class="help-block">:message</span>') }}
</div>

<!-- Work ( )  -->

<div>
	{{ Form::label('wk_phone', 'Work Phone:')}}
	{{ Form::text('wk_phone', Input::old('wk_phone'), array('class' => 'form-control', 'placeholder' => '###-###-####')) }}
	{{ $errors->first('wk_phone', '<span class="help-block">:message</span>') }}
</div>

<div class="form-group">
	{{ Form::label('hm_phone', 'Home Phone:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('hm_phone', Input::old('hm_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => 'phone', 'name' => 'hm_phone')) }}
		</div>
	</div>
	{{ $errors->first('hm_phone', '<span class="help-block">:message</span>') }}
</div>

<!-- 7. State/Country of Birth -->

<div class="form-group">
	{{ Form::label('birthplace', 'Birthplace* (state, country):', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('birthplace', Input::old('birthplace'), array('class' => 'form-control', 'placeholder' => 'State, Country', 'id' => 'birthplace', 'name' => 'birthplace')) }}
		</div>
	</div>
	{{ $errors->first('birthplace', '<span class="help-block">:message</span>') }}
</div>


<!-- 8. U.S. Citizen  Yes  No  -->

<div>
	{{ Form::label('Citizen', 'U.S. Citizen:')}}
	<!-- possible boolean value??? -->
	{{ Form::radio('yes', 'Yes', true, array('class' => 'form-control')) }}
	{{ Form::radio('no', 'No', true, array('class' => 'form-control')) }}
	{{ $errors->first('', '<span class="help-block">:message</span>') }}
</div>

<div class="form-group">
	{{ Form::label('tobacco', 'Tobacco Use Have you ever used any form of tobacco or nicotine products?:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::checkbox('Yes', '3', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'yes')) }}
		</div>
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>		
			{{ Form::checkbox('no', '4', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'no')) }}
		</div>
	</div>
	{{ $errors->first('tobacco', '<span class="help-block">:message</span>') }}
</div>

<!-- Visa Type ____________________ -->

<div>
	{{ Form::label('visa', 'Visa Type:')}}
	{{ Form::text('visa', Input::old('visa'), array('class' => 'form-control', 'placeholder' => 'Visa Type')) }}
	{{ $errors->first('visa', '<span class="help-block">:message</span>') }}
</div>

<!-- If No, Date of Entry into U.S. ___________________________ -->

<div>
	{{ Form::label('date_of_entry', 'If no, Date of Entry:') }}
	{{ Form::text('date_of_entry', Input::old('date_of_entry'), array('class' => 'form-control', 'placeholder' => 'Date of Entry')) }}
	{{ $errors->first('date_of_entry', '<span class="help-block">:message</span>') }}
</div>	

<!-- Country of Citizenship _______________________________ -->

<div>
	{{ Form::label('visa_exp_date', 'Exp. Date:') }}
	{{ Form::text('visa_exp_date', Input::old('visa_exp_date'), array('class' => 'form-control', 'placeholder' => 'Exp. Date')) }}
	{{ $errors->first('visa_exp_date', '<span class="help-block">:message</span>') }}
</div>	

9. Marital Status 
  M  S  W  D

 <div class="form-group">
	{{ Form::label('tobacco', 'Tobacco Use Have you ever used any form of tobacco or nicotine products?:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::checkbox('Yes', '3', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'yes')) }}
		</div>
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>		
			{{ Form::checkbox('no', '4', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'no')) }}
		</div>
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::checkbox('Yes', '3', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'yes')) }}
		</div>
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>		
			{{ Form::checkbox('no', '4', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'no')) }}
		</div>
	</div>	
	{{ $errors->first('tobacco', '<span class="help-block">:message</span>') }}
</div>


<!-- 10. Driver’s License Number and State of Issue or State ID Number -->

<div>
	{{ Form::label('dl_number', 'Number:')}}
	{{ Form::text('dl_number', Input::old('dl_number'), array('class' => 'form-control', 'placeholder' => 'License Number')) }}
	{{ $errors->first('dl_number', '<span class="help-block">:message</span>') }}
</div>


<!-- 11. Occupation (Include duties)  -->

<div>
	{{ Form::label('occupation', 'Occupation:') }}
	{{ Form::text('occupation', Input::old('occupation'), array('class' => 'form-control', 'placeholder' => 'Occupation')) }}
	{{ $errors->first('occupation', '<span class="help-block">:message</span>') }}
</div>	

<!-- 12. Annual Income -->

<div>
	{{ Form::label('personal_income', 'Personal Earned Income:')}}
	{{ Form::text('personal_income', Input::old('personal_income'), array('class' => 'form-control', 'placeholder' => 'Personal Earned Income')) }}
	{{ $errors->first('personal_income', '<span class="help-block">:message</span>') }}
</div>

<!-- 13. Total Net Worth -->

<div>
	{{ Form::label('net_worth', 'Net Worth:')}}
	{{ Form::text('net_worth', Input::old('net_worth'), array('class' => 'form-control', 'placeholder' => 'Net Worth')) }}
	{{ $errors->first('net_worth', '<span class="help-block">:message</span>') }}
</div>

<!-- 14. a. Employer’s Name and Address and Nature of Business  -->

<div>
	{{ Form::label('employer', 'Employer:')}}
	{{ Form::text('employer', Input::old('employer'), array('class' => 'form-control', 'placeholder' => 'Employer')) }}
	{{ $errors->first('employer', '<span class="help-block">:message</span>') }}
</div>

<!-- 14. b. How Long Employed -->

<div>
	{{ Form::label('length_of_emp', ':')}}
	{{ Form::text('length_of_emp', Input::old('length_of_emp'), array('class' => 'form-control', 'placeholder' => 'Length of Employment')) }}
	{{ $errors->first('length_of_emp', '<span class="help-block">:message</span>') }}
</div>

<!-- 15. Have you ever used tobacco or nicotine products in any form?  -->

<div class="form-group">
	{{ Form::label('tobacco', 'Tobacco Use Have you ever used any form of tobacco or nicotine products?:', array('class' => 'control-label')) }}
	<div class="controls">
<!--  Yes - give details below  -->
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::checkbox('Yes', '3', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'yes')) }}
		</div>
<!--  No -->
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>		
			{{ Form::checkbox('no', '4', array('class' => 'form-control', 'id' => 'tobacco', 'name' => 'no')) }}
		</div>
	</div>
	{{ $errors->first('tobacco', '<span class="help-block">:message</span>') }}
</div>

<!-- Cigarettes -->

<!-- Product Date last used (month/year) -->

<div class="form-group">
	{{ Form::label('date_last_use', 'If yes, date of last use:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('', Input::old('date_last_use'), array('class' => 'form-control', 'placeholder' => 'date_last_use', 'id' => 'date', 'name' => 'date_last_use')) }}
		</div>
	</div>
	{{ $errors->first('date_last_use', '<span class="help-block">:message</span>') }}
</div>

<!-- Amount / Frequency  -->

<div class="form-group">
	{{ Form::label('type_tobacco', 'If yes, date of last use:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('', Input::old('type_tobacco'), array('class' => 'form-control', 'placeholder' => 'type_tobacco', 'id' => 'type_tobacco', 'name' => 'type_tobacco')) }}
		</div>
	</div>
	{{ $errors->first('type_tobacco', '<span class="help-block">:message</span>') }}
</div>

<!-- Cigars -->

<!-- Product Date last used (month/year) -->

<div class="form-group">
	{{ Form::label('date_last_use', 'If yes, date of last use:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('', Input::old('date_last_use'), array('class' => 'form-control', 'placeholder' => 'date_last_use', 'id' => 'date', 'name' => 'date_last_use')) }}
		</div>
	</div>
	{{ $errors->first('date_last_use', '<span class="help-block">:message</span>') }}
</div>

<!-- Amount / Frequency  -->

<div class="form-group">
	{{ Form::label('type_tobacco', 'If yes, date of last use:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('', Input::old('type_tobacco'), array('class' => 'form-control', 'placeholder' => 'type_tobacco', 'id' => 'type_tobacco', 'name' => 'type_tobacco')) }}
		</div>
	</div>
	{{ $errors->first('type_tobacco', '<span class="help-block">:message</span>') }}
</div>

<!-- Other -->

<!-- Product Date last used (month/year) -->

<div class="form-group">
	{{ Form::label('date_last_use', 'If yes, date of last use:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('', Input::old('date_last_use'), array('class' => 'form-control', 'placeholder' => 'date_last_use', 'id' => 'date', 'name' => 'date_last_use')) }}
		</div>
	</div>
	{{ $errors->first('date_last_use', '<span class="help-block">:message</span>') }}
</div>

<!-- Amount / Frequency  -->

<div class="form-group">
	{{ Form::label('type_tobacco', 'If yes, date of last use:', array('class' => 'control-label')) }}
	<div class="controls">
		<div class="input-group col-sm-4">
			<span class="input-group-addon"><i class="fa fa-male"></i></span>
			{{ Form::text('', Input::old('type_tobacco'), array('class' => 'form-control', 'placeholder' => 'type_tobacco', 'id' => 'type_tobacco', 'name' => 'type_tobacco')) }}
		</div>
	</div>
	{{ $errors->first('type_tobacco', '<span class="help-block">:message</span>') }}
</div>

{{ form::close() }}
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

