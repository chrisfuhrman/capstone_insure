@extends('layouts.master')


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

<!-- Name ________________________________________________________________  -->
<div>
	{{ Form::label('name', 'Name:') }}
	<span class="input-group-addon"><i class="fa fa-male"></i></span> {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'name')) }}
	{{ $errors->first('ssn', '<span class="help-block">:message</span>') }}
</div>	

<!-- Social Security # ____________________ -->
<div>
	{{ Form::label('ssn', 'Social:')}}
	{{ Form::text('ssn', Input::old('ssn'), array('class' => 'form-control', 'placeholder' => '###-##-####')) }}
	{{ $errors->first('ssn', '<span class="help-block">:message</span>') }}
</div>

<!-- Sex  M  F  -->
<div>	
	{{ Form::label('Sex', 'Sex:')}}
	{{ Form::radio('male', 'Male', true, array('class' => 'form-control')) }}
	{{ Form::radio('female', 'Female', true, array('class' => 'form-control')) }}
	{{ $errors->first('photo', '<span class="help-block">:message</span>') }}
</div>

<!-- Birthplace* (state, country) ______________________  -->
<div>
	{{ Form::label('birthplace', 'Birthplace* (state, country):') }}
	{{ Form::text('birthplace', Input::old('birthplace'), array('class' => 'form-control', 'placeholder' => 'state, country')) }}
	{{ $errors->first('birthplace', '<span class="help-block">:message</span>') }}
</div>	

<!-- Date of Birth ________________  -->
<div>
	{{ Form::label('date_of_birth', 'Date of Birth:')}}
	{{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'form-control', 'placeholder' => 'mm/dd/yyyy')) }}
	{{ $errors->first('date_of_birth', '<span class="help-block">:message</span>') }}
</div>

<!-- Current Age ____ -->
<div>
	{{ Form::label('age', 'Current Age:') }}
	{{ Form::text('age', Input::old('age'), array('class' => 'form-control', 'placeholder' => 'Age')) }}
	{{ $errors->first('age', '<span class="help-block">:message</span>') }}
</div>	

<!-- Tobacco Use Have you ever used any form of tobacco or nicotine products?  yes  no  -->
<div>
	{{ Form::label('tobacco', 'Tobacco Use Have you ever used any form of tobacco or nicotine products?:')}}
	<!-- possible boolean value??? -->
	{{ Form::radio('yes', 'Yes', true, array('class' => 'form-control')) }}
	{{ Form::radio('no', 'No', true, array('class' => 'form-control')) }}
	{{ $errors->first('tobacco', '<span class="help-block">:message</span>') }}
</div>

<!-- If yes, date of last use ________________ -->
<div>
	{{ Form::label('date_last_use', 'If yes, date of last use:') }}
	{{ Form::text('date_last_use', Input::old('date_last_use'), array('class' => 'form-control', 'placeholder' => 'mm/dd/yyyy')) }}
	{{ $errors->first('date_last_use', '<span class="help-block">:message</span>') }}
</div>	

<!-- If yes, type and quantity of tobacco or nicotine products used ______________________________________________________ -->
<div>
	{{ Form::label('type_tobacco', 'If yes, type and quantity of tobacco or nicotine products used:')}}
	{{ Form::text('type_tobacco', Input::old('type_tobacco'), array('class' => 'form-control', 'placeholder' => 'Type and quantity')) }}
	{{ $errors->first('type_tobacco', '<span class="help-block">:message</span>') }}
</div>

<!-- Driver’s License  yes  no  -->
<div>
	{{ Form::label('driver_license', 'Driver’s License:') }}
	<!-- possible boolean value??? -->
	{{ Form::radio('yes', 'Yes', true, array('class' => 'form-control')) }}
	{{ Form::radio('no', 'No', true, array('class' => 'form-control')) }}
	{{ $errors->first('', '<span class="help-block">:message</span>') }}
</div>	

<!-- Number __________________________________________  -->
<div>
	{{ Form::label('dl_number', 'Number:')}}
	{{ Form::text('dl_number', Input::old('dl_number'), array('class' => 'form-control', 'placeholder' => 'License Number')) }}
	{{ $errors->first('dl_number', '<span class="help-block">:message</span>') }}
</div>

<!-- License State ________________ -->
<div>
	{{ Form::label('dl_state', 'License State:') }}
	{{ Form::text('dl_state', Input::old('dl_state'), array('class' => 'form-control', 'placeholder' => 'License State')) }}
	{{ $errors->first('dl_state', '<span class="help-block">:message</span>') }}
</div>	

<!-- U.S. Citizen  yes  no  -->
<div>
	{{ Form::label('Citizen', 'U.S. Citizen:')}}
	<!-- possible boolean value??? -->
	{{ Form::radio('yes', 'Yes', true, array('class' => 'form-control')) }}
	{{ Form::radio('no', 'No', true, array('class' => 'form-control')) }}
	{{ $errors->first('', '<span class="help-block">:message</span>') }}
</div>

<!-- If no, Date of Entry ______________________  -->
<div>
	{{ Form::label('date_of_entry', 'If no, Date of Entry:') }}
	{{ Form::text('date_of_entry', Input::old('date_of_entry'), array('class' => 'form-control', 'placeholder' => 'Date of Entry')) }}
	{{ $errors->first('date_of_entry', '<span class="help-block">:message</span>') }}
</div>	

<!-- Visa Type ________________  -->
<div>
	{{ Form::label('visa', 'Visa Type:')}}
	{{ Form::text('visa', Input::old('visa'), array('class' => 'form-control', 'placeholder' => 'Visa Type')) }}
	{{ $errors->first('visa', '<span class="help-block">:message</span>') }}
</div>

<!-- Exp. Date____________ -->
<div>
	{{ Form::label('visa_exp_date', 'Exp. Date:') }}
	{{ Form::text('visa_exp_date', Input::old('visa_exp_date'), array('class' => 'form-control', 'placeholder' => 'Exp. Date')) }}
	{{ $errors->first('visa_exp_date', '<span class="help-block">:message</span>') }}
</div>	

<!-- Address ________________________________  -->
<div>
	{{ Form::label('address', 'Address:')}}
	{{ Form::text('', Input::old(''), array('class' => 'form-control', 'placeholder' => '')) }}
	{{ $errors->first('', '<span class="help-block">:message</span>') }}
</div>

<!-- City, State ______________________________  -->
<div>
	{{ Form::label('city_state', 'City, State:') }}
	{{ Form::text('city_state', Input::old('city_state'), array('class' => 'form-control', 'placeholder' => 'City, State')) }}
	{{ $errors->first('city_state', '<span class="help-block">:message</span>') }}
</div>	

<!-- ZIP __________________ -->
<div>
	{{ Form::label('zip', 'ZIP:')}}
	{{ Form::text('zip', Input::old('zip'), array('class' => 'form-control', 'placeholder' => '#####')) }}
	{{ $errors->first('zip', '<span class="help-block">:message</span>') }}
</div>

<!-- Home Phone __________________  -->
<div>
	{{ Form::label('hm_phone', 'Home Phone:') }}
	{{ Form::text('hm_phone', Input::old('hm_phone'), array('class' => 'form-control', 'placeholder' => '###-###-####')) }}
	{{ $errors->first('hm_phone', '<span class="help-block">:message</span>') }}
</div>	

<!-- Work Phone ____________________  -->
<div>
	{{ Form::label('wk_phone', 'Work Phone:')}}
	{{ Form::text('wk_phone', Input::old('wk_phone'), array('class' => 'form-control', 'placeholder' => '###-###-####')) }}
	{{ $errors->first('wk_phone', '<span class="help-block">:message</span>') }}
</div>

<!-- Email ____________________________________ -->
<div>
	{{ Form::label('email', 'Email:') }}
	{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'name@somewhere.com')) }}
	{{ $errors->first('email', '<span class="help-block">:message</span>') }}
</div>	

<!-- Employer __________________________  -->
<div>
	{{ Form::label('employer', 'Employer:')}}
	{{ Form::text('employer', Input::old('employer'), array('class' => 'form-control', 'placeholder' => 'Employer')) }}
	{{ $errors->first('employer', '<span class="help-block">:message</span>') }}
</div>

<!-- Occupation ________________________  -->
<div>
	{{ Form::label('occupation', 'Occupation:') }}
	{{ Form::text('occupation', Input::old('occupation'), array('class' => 'form-control', 'placeholder' => 'Occupation')) }}
	{{ $errors->first('occupation', '<span class="help-block">:message</span>') }}
</div>	

<!-- Length of Employment ______________ -->
<div>
	{{ Form::label('length_of_emp', ':')}}
	{{ Form::text('length_of_emp', Input::old('length_of_emp'), array('class' => 'form-control', 'placeholder' => 'Length of Employment')) }}
	{{ $errors->first('length_of_emp', '<span class="help-block">:message</span>') }}
</div>

<!-- Employer Address __________________________________________  -->
<div>
	{{ Form::label('emp_address', 'Employer Address:') }}
	{{ Form::text('emp_address', Input::old('emp_address'), array('class' => 'form-control', 'placeholder' => 'Employer Address')) }}
	{{ $errors->first('emp_address', '<span class="help-block">:message</span>') }}
</div>	

<!-- City, State ______________  -->
<div>
	{{ Form::label('emp_city_state', 'City, State:')}}
	{{ Form::text('emp_city_state', Input::old('emp_city_state'), array('class' => 'form-control', 'placeholder' => 'Employer City, State',)) }}
	{{ $errors->first('emp_city_state', '<span class="help-block">:message</span>') }}
</div>

<!-- ZIP ________________ -->
<div>
	{{ Form::label('emp_zip', 'ZIP:')}}
	{{ Form::text('emp_zip', Input::old('emp_zip'), array('class' => 'form-control', 'placeholder' => 'Employer ZIP')) }}
	{{ $errors->first('emp_zip', '<span class="help-block">:message</span>') }}
</div>

<!-- Duties __________________________________________________________________________________________________ -->
<div>
	{{ Form::label('emp_duties', 'Duties:') }}
	{{ Form::text('emp_duties', Input::old('emp_duties'), array('class' => 'form-control', 'placeholder' => 'Duties')) }}
	{{ $errors->first('emp_duties', '<span class="help-block">:message</span>') }}
</div>	

<!-- Personal Earned Income $ ________________  -->
<div>
	{{ Form::label('personal_income', 'Personal Earned Income:')}}
	{{ Form::text('personal_income', Input::old('personal_income'), array('class' => 'form-control', 'placeholder' => 'Personal Earned Income')) }}
	{{ $errors->first('personal_income', '<span class="help-block">:message</span>') }}
</div>

<!-- Household Income $ __________________  -->
<div>
	{{ Form::label('household_income', 'Household Income:') }}
	{{ Form::text('household_income', Input::old('household_income'), array('class' => 'form-control', 'placeholder' => 'Household Income')) }}
	{{ $errors->first('household_income', '<span class="help-block">:message</span>') }}
</div>	

Net Worth $ __________________
<div>
	{{ Form::label('net_worth', 'Net Worth:')}}
	{{ Form::text('net_worth', Input::old('net_worth'), array('class' => 'form-control', 'placeholder' => 'Net Worth')) }}
	{{ $errors->first('net_worth', '<span class="help-block">:message</span>') }}
</div>

<h3>If Primary Proposed Insured is a child or is age 18 or over and not self-supporting, what amount of insurance is in force on any of the
following: </h3>

<!-- Spouse $ ____________________  -->
<div>
	{{ Form::label('spouse', 'Spouse $:')}}
	{{ Form::text('spouse', Input::old('spouse'), array('class' => 'form-control', 'placeholder' => 'Spouse $')) }}
	{{ $errors->first('spouse', '<span class="help-block">:message</span>') }}
</div>

<!-- Father $ ________________  -->
<div>
	{{ Form::label('father', 'Father $:') }}
	{{ Form::text('father', Input::old('father'), array('class' => 'form-control', 'placeholder' => 'Father $')) }}
	{{ $errors->first('father', '<span class="help-block">:message</span>') }}
</div>	

<!-- Mother $ ________________  -->
<div>
	{{ Form::label('mother', 'Mother $:')}}
	{{ Form::text('mother', Input::old('mother'), array('class' => 'form-control', 'placeholder' => 'Mother $')) }}
	{{ $errors->first('mother', '<span class="help-block">:message</span>') }}
</div>

<!-- Siblings $ _____________ -->
<div>
	{{ Form::label('siblings', 'Siblings:')}}
	{{ Form::text('siblings', Input::old('siblings'), array('class' => 'form-control', 'placeholder' => 'Siblings $')) }}
	{{ $errors->first('siblings', '<span class="help-block">:message</span>') }}
</div>

@stop

