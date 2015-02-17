@extends('layouts.master-app')

@section('content')

<div class="container">

	<!-- SECTION A PROPOSED INSURED -->

	<h1>PROPOSED INSURED</h1>

	<h3>Primary Proposed Insured</h3>
	<div class="row">
		<div class="col-lg-12">
			<div class="box">

				<h5>Full Legal Name</h5>

				<div class="form-group">
					{{ Form::label('first_name', 'First Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name', 'name' => 'first_name')) }}
						</div>
					</div>
					{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
				</div>	

				<div class="form-group">
					{{ Form::label('middle_name', 'Middle Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('middle_name', Input::old('middle_name'), array('class' => 'form-control', 'placeholder' => 'Middle Name', 'id' => 'middle_name', 'name' => 'middle_name')) }}
						</div>
					</div>
					{{ $errors->first('middle_name', '<span class="help-block">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('last_name', 'Last Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name', 'name' => 'last_name')) }}
						</div>
					</div>
					{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('maiden_name', 'Maiden Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('maiden_name', Input::old('maiden_name'), array('class' => 'form-control', 'placeholder' => 'Maiden Name', 'id' => 'maiden_name', 'name' => 'maiden_name')) }}
						</div>
					</div>
					{{ $errors->first('maiden_name', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 2. Gender  -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="gender">Gender</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('gender', 'M') }} Male
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('gender', 'F', true) }} Female
						</label>
					</div>
					</div>
				</div>
				</div>

				<!-- 3. Date of Birth  -->

				<div class="form-group">
					{{ Form::label('dob', 'Date of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'dob')) }}
						</div>
					</div>
					{{ $errors->first('dob', '<span class="help-block">:message</span>') }}
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
							{{ Form::text('address', Input::old('address'), array('class' => "form-control", 'placeholder' => 'Home Address', 'id' => "address", 'name' => "address")) }}
						</div>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('address2', Input::old('address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "address2", 'name' => "address2")) }}
						</div>
					</div>
					{{ $errors->first('address', '<span class="help-block">:message</span>') }}
					{{ $errors->first('address2', '<span class="help-block">:message</span>') }}
				</div>

				<!-- City, State _________________________  -->	

				<div class="form-group">
					{{ Form::label('city', 'City:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('city', Input::old('city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "city", 'name' => "city")) }}
						</div>
					</div>
					{{ $errors->first('city', '<span class="help-block">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('state', 'State:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('state', Input::old('state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "state", 'name' => "state")) }}
						</div>
					</div>
					{{ $errors->first('state', '<span class="help-block">:message</span>') }}
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

				<!-- Work ( )  -->

				<div class="form-group">
					{{ Form::label('work_phone', 'Work Phone:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('work_phone', Input::old('work_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => "phone2", 'name' => 'work_phone')) }}
						</div>
					</div>
					{{ $errors->first('work_phone', '<span class="help-block">:message</span>') }}
				</div>

				<!-- Home ( ) -->

				<div class="form-group">
					{{ Form::label('home_phone', 'Home Phone:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('home_phone', Input::old('home_phone'), array('class' => 'form-control', 'placeholder' => '123-456-7890', 'id' => 'phone', 'name' => 'home_phone')) }}
						</div>
					</div>
					{{ $errors->first('home_phone', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 7. State/Country of Birth -->

				<div class="form-group">
					{{ Form::label('birth_state', 'Birth State:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('birth_state', Input::old('birth_state'), array('class' => 'form-control', 'placeholder' => 'State of Birth', 'id' => 'birth_state', 'name' => 'birth_state')) }}
						</div>
					</div>
					{{ $errors->first('birth_state', '<span class="help-block">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('birth_country', 'Country of Birth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('birth_country', Input::old('birth_country'), array('class' => 'form-control', 'placeholder' => 'Country of Birth', 'id' => 'birth_country', 'name' => 'birth_country')) }}
						</div>
					</div>
					{{ $errors->first('birth_country', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 8. U.S. Citizen  Yes  No  -->

				<div class="form-group">
					<div>
					{{ Form::label('citizen', 'U.S. Citizen:', array('class' => 'control-label')) }}
					</div>
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							<label class="switch">
							{{ Form::checkbox('citizen', 'citizen', false, array('class' => 'switch-input', 'id' => 'citizen')) }}
							    <span class="switch-label" data-on="Yes" data-off="No"></span>
							    <span class="switch-handle"></span>
						    </label>
						</div>
					</div>
					{{ $errors->first('citizen', '<span class="help-block">:message</span>') }}
				</div>

				<div class="citizen_extra">

					<!-- Visa Type ____________________ -->

					<div class="form-group">
						{{ Form::label('visa', 'Visa Type:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('visa', Input::old('visa'), array('class' => 'form-control', 'placeholder' => 'Visa Type', 'id' => 'visa', 'name' => 'visa')) }}
							</div>
						</div>
						{{ $errors->first('visa', '<span class="help-block">:message</span>') }}
					</div>

					<!-- If No, Date of Entry into U.S. ___________________________ -->

					<div class="form-group">
						{{ Form::label('date_of_entry', 'If no, Date of Entry:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('date_of_entry', Input::old('date_of_entry'), array('class' => 'form-control', 'placeholder' => 'Date of Entry', 'id' => 'date2', 'name' => 'date_of_entry')) }}
							</div>
						</div>
						{{ $errors->first('date_of_entry', '<span class="help-block">:message</span>') }}
					</div>	

					<!-- Country of Citizenship _______________________________ -->	

					<div class="form-group">
						{{ Form::label('country_of_citizenship', 'Country of Citizenship:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('country_of_citizenship', Input::old('country_of_citizenship'), array('class' => 'form-control', 'placeholder' => 'Country of Citizenship', 'id' => 'country_of_citizenship', 'name' => 'country_of_citizenship')) }}
							</div>
						</div>
						{{ $errors->first('country_of_citizenship', '<span class="help-block">:message</span>') }}
					</div>	

				</div>

				<!-- 9. Marital Status 
				  M  S  W  D -->

				<div class="form-group">
					{{ Form::label('marital_status', 'Marital Status:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::select('citizen', array('default'=> NULL, 'married' => 'Married', 'single' => 'Single', 'widowed' => 'Widowed', 'divorced' => 'Divorced'), array('class' => 'form-control', 'id' => 'marital_status')) }}
						</div>
					</div>
					{{ $errors->first('marital_status', '<span class="help-block">:message</span>') }}
				</div>				


				<!-- 10. Driver’s License Number or State ID Number -->

				<div class="form-group">
					{{ Form::label('id_number', 'Driver’s License Number or State ID Number:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('id_number', Input::old('id_number'), array('class' => 'form-control', 'placeholder' => 'DL # or State ID #', 'id' => 'id_number', 'name' => 'id_number')) }}
						</div>
					</div>
					{{ $errors->first('id_number', '<span class="help-block">:message</span>') }}
				</div>

				<!-- State of Issue  -->

				<div class="form-group">
					{{ Form::label('id_state', 'State of Issue:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('id_state', Input::old('id_state'), array('class' => 'form-control', 'placeholder' => 'State of Issue', 'id' => 'id_state', 'name' => 'id_state')) }}
						</div>
					</div>
					{{ $errors->first('id_state', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 11. Occupation (Include duties)  -->	

				<div class="form-group">
					{{ Form::label('occupation', 'Occupation:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('occupation', Input::old('occupation'), array('class' => 'form-control', 'placeholder' => 'Occupation', 'id' => 'occupation', 'name' => 'occupation')) }}
						</div>
					</div>
					{{ $errors->first('occupation', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 12. Annual Income -->

				<div class="form-group">
					{{ Form::label('annual_income', 'Annual Income:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('annual_income', Input::old('annual_income'), array('class' => 'form-control', 'placeholder' => 'Annual Income', 'id' => 'annual_income', 'name' => 'annual_income')) }}
						</div>
					</div>
					{{ $errors->first('annual_income', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 13. Total Net Worth -->

				<div class="form-group">
					{{ Form::label('total_net_worth', 'Total Net Worth:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('total_net_worth', Input::old('total_net_worth'), array('class' => 'form-control', 'placeholder' => 'Total Net Worth', 'id' => 'total_net_worth', 'name' => 'total_net_worth')) }}
						</div>
					</div>
					{{ $errors->first('total_net_worth', '<span class="help-block">:message</span>') }}
				</div>

				<!-- 14. a. Employer’s Name and Address and Nature of Business  -->

				<div class="form-group">
					{{ Form::label('emp_name', 'Employer’s Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('emp_name', Input::old('emp_name'), array('class' => 'form-control', 'placeholder' => 'Employer’s Name', 'id' => 'emp_name', 'name' => 'emp_name')) }}
						</div>
					</div>
					{{ $errors->first('emp_name', '<span class="help-block">:message</span>') }}
				</div>

					{{ Form::label('emp_status', 'If not Employed Select One:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::select('emp_status', array('default' => NULL, 'unemployed' => 'Unemployed', 'retired' => 'Retired', 'student' => 'Student'), array('class' => 'form-control', 'id' => 'emp_status')) }}
						</div>
					</div>
					{{ $errors->first('emp_status', '<span class="help-block">:message</span>') }}

				<div class="emp_extra">

					<div class="form-group">
						{{ Form::label('emp_address', 'Employer’s Address:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('emp_address', Input::old('emp_address'), array('class' => 'form-control', 'placeholder' => 'Employer’s Address', 'id' => 'emp_address', 'name' => 'emp_address')) }}
							</div>
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('emp_address2', Input::old('emp_address2'), array('class' => 'form-control', 'placeholder' => 'Suite, Unit, Bld, Etc.', 'id' => 'emp_address2', 'name' => 'emp_address2')) }}
							</div>
						</div>
						{{ $errors->first('emp_address', '<span class="help-block">:message</span>') }}
						{{ $errors->first('emp_address2', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('emp_address_city', 'City:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('emp_address_city', Input::old('emp_address_city'), array('class' => 'form-control', 'placeholder' => 'Employer’s Address City', 'id' => 'emp_address_city', 'name' => 'emp_address_city')) }}
							</div>
						</div>
						{{ $errors->first('emp_address_city', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('emp_address_state', 'State:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('emp_address_state', Input::old('emp_address_state'), array('class' => 'form-control', 'placeholder' => 'Employer’s Address State', 'id' => 'emp_address_state', 'name' => 'emp_address_state')) }}
							</div>
						</div>
						{{ $errors->first('emp_address_state', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('emp_address_zip', 'Zip:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('emp_address_zip', Input::old('emp_address_zip'), array('class' => 'form-control', 'placeholder' => 'Employer’s Address Zip', 'id' => 'emp_address_zip', 'name' => 'emp_address_zip')) }}
							</div>
						</div>
						{{ $errors->first('emp_address_zip', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('emp_nature_buisness', 'Nature of Business', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('emp_nature_buisness', Input::old('emp_nature_buisness'), array('class' => 'form-control', 'placeholder' => 'Nature of Business', 'id' => 'emp_nature_buisness', 'name' => 'emp_nature_buisness')) }}
							</div>
						</div>
						{{ $errors->first('emp_nature_buisness', '<span class="help-block">:message</span>') }}
					</div>

					<!-- 14. b. How Long Employed -->

					<div class="form-group">
						{{ Form::label('length_of_emp', 'How Long Employed:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('length_of_emp', Input::old('length_of_emp'), array('class' => 'form-control', 'placeholder' => 'How Long Employed', 'id' => 'length_of_emp', 'name' => 'length_of_emp')) }}
							</div>
						</div>
						{{ $errors->first('length_of_emp', '<span class="help-block">:message</span>') }}
					</div>

				</div>

				<!-- 15. Have you ever used tobacco or nicotine products in any form?  -->

				<div class="form-group">
					<div>
					{{ Form::label('tobacco', 'Have you ever used any form of tobacco or nicotine products?:', array('class' => 'control-label')) }}
					</div>
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							<label class="switch">
							{{ Form::checkbox('tobacco', 'tobacco', false, array('class' => 'switch-input', 'id' => 'tobacco')) }}
							    <span class="switch-label" data-on="Yes" data-off="No"></span>
							    <span class="switch-handle"></span>
						    </label>
						</div>
					</div>
					{{ $errors->first('tobacco', '<span class="help-block">:message</span>') }}
				</div>

				<div class="tobacco_extra">

					<h5>Cigarettes</h5>

					<!-- Product Date last used (month/year) -->

					<div class="form-group">
						{{ Form::label('cigs_last_used', 'If yes, date of last use (Cigarettes):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('cigs_last_used', Input::old('cigs_last_used'), array('class' => 'form-control', 'placeholder' => 'MM/YYYY', 'id' => 'shortDate', 'name' => 'cigs_last_used')) }}
							</div>
						</div>
						{{ $errors->first('cigs_last_used', '<span class="help-block">:message</span>') }}
					</div>

					<!-- Amount / Frequency  -->

					<div class="form-group">
						{{ Form::label('cig_amount', 'Amount (Cigarettes):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('cig_amount', Input::old('cig_amount'), array('class' => 'form-control', 'placeholder' => 'Amount', 'id' => 'cig_amount', 'name' => 'cig_amount')) }}
							</div>
						</div>
						{{ $errors->first('cig_amount', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('cigs_frequency', 'Frequency (Cigarettes):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('cigs_frequency', Input::old('cigs_frequency'), array('class' => 'form-control', 'placeholder' => 'Frequency', 'id' => 'cigs_frequency', 'name' => 'cigs_frequency')) }}
							</div>
						</div>
						{{ $errors->first('cigs_frequency', '<span class="help-block">:message</span>') }}
					</div>

					<h5>Cigars</h5>

					<!-- Product Date last used (month/year) -->

					<div class="form-group">
						{{ Form::label('cigars_last_used', 'If yes, date of last use (Cigars):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('cigars_last_used', Input::old('cigars_last_used'), array('class' => 'form-control', 'placeholder' => 'MM/YYYY', 'id' => 'shortDate', 'name' => 'cigars_last_used')) }}
							</div>
						</div>
						{{ $errors->first('cigars_last_used', '<span class="help-block">:message</span>') }}
					</div>

					<!-- Amount / Frequency  -->

					<div class="form-group">
						{{ Form::label('cigar_amount', 'Amount (Cigars):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('cigar_amount', Input::old('cigar_amount'), array('class' => 'form-control', 'placeholder' => 'Amount', 'id' => 'Amount', 'name' => 'cigar_amount')) }}
							</div>
						</div>
						{{ $errors->first('cigar_amount', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('cigar_frequency', 'Frequency (Cigars):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('cigar_frequency', Input::old('cigar_frequency'), array('class' => 'form-control', 'placeholder' => 'Frequency', 'id' => 'Frequency', 'name' => 'cigar_frequency')) }}
							</div>
						</div>
						{{ $errors->first('cigar_frequency', '<span class="help-block">:message</span>') }}
					</div>

					<h5>Other</h5>

					<!-- Product Date last used (month/year) -->

					<div class="form-group">
						{{ Form::label('other_last_used', 'If yes, date of last use (Other):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('other_last_used', Input::old('other_last_used'), array('class' => 'form-control', 'placeholder' => 'MM/YYYY', 'id' => 'shortDate', 'name' => 'other_last_used')) }}
							</div>
						</div>
						{{ $errors->first('other_last_used', '<span class="help-block">:message</span>') }}
					</div>

					<!-- Amount / Frequency  -->

					<div class="form-group">
						{{ Form::label('other_amount', 'Amount (Other):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('other_amount', Input::old('other_amount'), array('class' => 'form-control', 'placeholder' => 'Amount', 'id' => 'other_amount', 'name' => 'other_amount')) }}
							</div>
						</div>
						{{ $errors->first('other_frequency', '<span class="help-block">:message</span>') }}
					</div>

					<div class="form-group">
						{{ Form::label('other_frequency', 'Frequency (Other):', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('other_frequency', Input::old('other_frequency'), array('class' => 'form-control', 'placeholder' => 'Frequency', 'id' => 'other_frequency', 'name' => 'other_frequency')) }}
							</div>
						</div>
						{{ $errors->first('other_frequency', '<span class="help-block">:message</span>') }}
					</div>
				</div>


			</div>
		</div>
	</div>

	<nav>
	  <ul class="pager">
	    <li><a href="{{{ action('PolicyAppController@showLifeAppSecB') }}}">Next</a></li>
	  </ul>
	</nav>

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

	<style type="text/css">
		.emp_extra{
			display: none;
		}
	</style>

	<script>

		$(document).ready(function() {
			$('.tobacco_extra').hide();
			$('.citizen_extra').hide();
			$('.emp_extra').show();

			function empVal () {

				var value = $( "#emp_status" ).val();
				if (value == 'default'){

					$('.emp_extra').slideDown(900);

				} else {

					$('.emp_extra').slideUp(900);

				}

			}
			$( "select" ).change( empVal );


			$( "#citizen" ).on('click', function(){
					var value = $(this).prop( 'checked' );
				
				if (value == true){

					$('.citizen_extra').slideDown(900);

				} else {

					$('.citizen_extra').slideUp(900);

				}

				});
	
		
				$( "#tobacco" ).on('click', function(){
					var value = $(this).prop( 'checked' );
				
				if (value == true){

					$('.tobacco_extra').slideDown(900);

				} else {

					$('.tobacco_extra').slideUp(900);

				}

				});

			$('.btn-toggle').click(function() {

			    $(this).find('.btn').toggleClass('active');  
			    
			    if ($(this).find('.btn-primary').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-primary');
			    }
			    if ($(this).find('.btn-danger').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-danger');
			    }
			    if ($(this).find('.btn-success').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-success');
			    }
			    if ($(this).find('.btn-info').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-info');
			    }
			    
			    $(this).find('.btn').toggleClass('btn-default');
			       
			});

		});

	</script>



@stop

