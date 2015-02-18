@extends('layouts.master')

@section('content')

<!-- PART 2 Medical History -->

<h1>Medical History</h1>


<div class="row">
	<div class="col-lg-12">
		<div class="box">


<!-- If your weight has changed by over 10 lbs. in the last year -->


			<div class="form-group">
			<div class="controls">
				<label class="control-label" for="weight_change">If your weight has changed by over 10 lbs. in the last year?</label>
				<div class="input-group col-sm-4">
				<div class="btn-group btn-toggle" data-toggle="buttons" id="weight_change">
					<label class="btn btn-mini btn-default" for="">
						{{Form::radio('weight_change', 'Yes') }} Yes
					</label>
					<label class="btn btn-mini btn-info" for="">
						{{Form::radio('weight_change', 'No', true) }} No
					</label>
				</div>
				</div>
			</div>
				{{ $errors->first('weight_change', '<span class="help-block">:message</span>') }}
			</div>

<!-- indicate amount -->

			<div class="weight_change_extra">

				<div class="form-group">
					{{ Form::label('indicate_amount', 'Indicate Amount:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('indicate_amount', Input::old('indicate_amount'), array('class' => 'form-control', 'placeholder' => 'Weight change in pounds', 'id' => 'indicate_amount', 'name' => 'indicate_amount')) }}
						</div>
					</div>
					{{ $errors->first('indicate_amount', '<span class="help-block">:message</span>') }}
				</div>
		
<!-- indicate reason -->

				<div class="form-group">
					{{ Form::label('indicate_reason', 'Indicate Reason:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('indicate_reason', Input::old('indicate_reason'), array('class' => 'form-control', 'placeholder' => 'Reason for change', 'id' => 'indicate_reason', 'name' => 'indicate_reason')) }}
						</div>
					</div>
					{{ $errors->first('indicate_reason', '<span class="help-block">:message</span>') }}
				</div>
			
			</div>

<!-- PHYSICIAN INFORMATION -->

<!-- 4. Primary Physician -->

<h3>Primary Physician</h3>

<!-- Name -->

				<div class="form-group">
					{{ Form::label('primary_physician_name', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_physician_name', Input::old('primary_physician_name'), array('class' => 'form-control', 'placeholder' => 'Physician Full Name', 'id' => 'primary_physician_name', 'name' => 'primary_physician_name')) }}
						</div>
					</div>
					{{ $errors->first('primary_physician_name', '<span class="help-block">:message</span>') }}
				</div>

<!-- Address -->

				<div class="form-group">
					{{ Form::label('primary_physician_address', 'Address:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_physician_address', Input::old('primary_physician_address'), array('class' => "form-control", 'placeholder' => 'Address', 'id' => "primary_physician_address", 'name' => "primary_physician_address")) }}
						</div>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_physician_address2', Input::old('primary_physician_address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "primary_physician_address2", 'name' => "primary_physician_address2")) }}
						</div>
					</div>
					{{ $errors->first('primary_physician_address', '<span class="help-block">:message</span>') }}
					{{ $errors->first('primary_physician_address2', '<span class="help-block">:message</span>') }}
				</div>

<!-- Date last seen -->

				<div class="form-group">
					{{ Form::label('primary_physician_date', 'Date Last Seen:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_physician_date', Input::old('primary_physician_date'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'primary_physician_date')) }}
						</div>
					</div>
					{{ $errors->first('primary_physician_date', '<span class="help-block">:message</span>') }}
				</div>

<!-- Reason last seen  -->

				<div class="form-group">
					{{ Form::label('primary_physician_reason', 'Indicate Reason:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_physician_reason', Input::old('primary_physician_reason'), array('class' => 'form-control', 'placeholder' => 'Reason for visit', 'id' => 'primary_physician_reason', 'name' => 'primary_physician_reason')) }}
						</div>
					</div>
					{{ $errors->first('primary_physician_reason', '<span class="help-block">:message</span>') }}
				</div>

<!-- results of visit -->

				<div class="form-group">
					{{ Form::label('primary_physician_results', 'Indicate Reason:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('primary_physician_results', Input::old('primary_physician_results'), array('class' => 'form-control', 'placeholder' => 'Results of visit', 'id' => 'primary_physician_results', 'name' => 'primary_physician_results')) }}
						</div>
					</div>
					{{ $errors->first('primary_physician_results', '<span class="help-block">:message</span>') }}
				</div>

<!-- 5. Physician Last Consulted -->

<h3>Physician Last Consulted</h3>

<!-- Name -->

				<div class="form-group">
					{{ Form::label('last_physician_name', 'Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_physician_name', Input::old('last_physician_name'), array('class' => 'form-control', 'placeholder' => 'Physician Full Name', 'id' => 'last_physician_name', 'name' => 'last_physician_name')) }}
						</div>
					</div>
					{{ $errors->first('last_physician_name', '<span class="help-block">:message</span>') }}
				</div>

<!-- Address -->

				<div class="form-group">
					{{ Form::label('last_physician_address', 'Address:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_physician_address', Input::old('last_physician_address'), array('class' => "form-control", 'placeholder' => 'Address', 'id' => "last_physician_address", 'name' => "last_physician_address")) }}
						</div>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_physician_address2', Input::old('last_physician_address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "last_physician_address2", 'name' => "last_physician_address2")) }}
						</div>
					</div>
					{{ $errors->first('last_physician_address', '<span class="help-block">:message</span>') }}
					{{ $errors->first('last_physician_address2', '<span class="help-block">:message</span>') }}
				</div>

<!-- Date last seen -->

				<div class="form-group">
					{{ Form::label('last_physician_date', 'Date Last Seen:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_physician_date', Input::old('last_physician_date'), array('class' => 'form-control', 'placeholder' => '', 'id' => 'date2', 'name' => 'last_physician_date')) }}
						</div>
					</div>
					{{ $errors->first('last_physician_date', '<span class="help-block">:message</span>') }}
				</div>

<!-- Reason last seen  -->

				<div class="form-group">
					{{ Form::label('last_physician_reason', 'Indicate Reason:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_physician_reason', Input::old('last_physician_reason'), array('class' => 'form-control', 'placeholder' => 'Reason for visit', 'id' => 'last_physician_reason', 'name' => 'last_physician_reason')) }}
						</div>
					</div>
					{{ $errors->first('last_physician_reason', '<span class="help-block">:message</span>') }}
				</div>

<!-- results of visit -->

				<div class="form-group">
					{{ Form::label('last_physician_results', 'Indicate Reason:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('last_physician_results', Input::old('last_physician_results'), array('class' => 'form-control', 'placeholder' => 'Results of visit', 'id' => 'last_physician_results', 'name' => 'last_physician_results')) }}
						</div>
					</div>
					{{ $errors->first('last_physician_results', '<span class="help-block">:message</span>') }}
				</div>

<!-- 6. Has a parent or sibling ever been diagnosed or treated by a member of the medical profession for heart or kidney
disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease, Sickle Cell Disease or Familial
Adenomatous Polyposis (FAP)? If Yes, give details in the Family History chart below.   -->

			<div class="form-group">
			<div class="controls">
				<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
				<div class="input-group col-sm-4">
				<div class="btn-group btn-toggle" data-toggle="buttons" id="family_history">
					<label class="btn btn-mini btn-default">
						{{Form::radio('family_history', 'Yes') }} Yes
					</label>
					<label class="btn btn-mini btn-info">
						{{Form::radio('family_history', 'No', true) }} No
					</label>
				</div>
				</div>
			</div>
				{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
			</div>

			<div class="family_history_extra">

				<p>Family History: Include the age at onset/event for each medical condition.</p>

<h3>Father</h3>


<!-- Medical Conditions -->

				<div class="form-group">
					{{ Form::label('father_medical_conditions', 'Medical Conditions:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('father_medical_conditions', Input::old('father_medical_conditions'), array('class' => 'form-control', 'placeholder' => 'Medical Conditions', 'id' => 'father_medical_conditions', 'name' => 'father_medical_conditions')) }}
						</div>
					</div>
					{{ $errors->first('father_medical_conditions', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Onset/Event   -->

				<div class="form-group">
					{{ Form::label('father_age_at_event', 'Age at Onset/Event:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('father_age_at_event', Input::old('father_age_at_event'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'father_age_at_event', 'name' => 'father_age_at_event')) }}
						</div>
					</div>
					{{ $errors->first('father_age_at_event', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age if Living -->

				<div class="form-group">
					{{ Form::label('father_age_if_living', 'Age if Living:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('father_age_if_living', Input::old('father_age_if_living'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'father_age_if_living', 'name' => 'father_age_if_living')) }}
						</div>
					</div>
					{{ $errors->first('father_age_if_living', '<span class="help-block">:message</span>') }}
				</div>

<!-- Cause of Death  -->

				<div class="form-group">
					{{ Form::label('father_cause_of_death', 'Cause of Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('father_cause_of_death', Input::old('father_cause_of_death'), array('class' => 'form-control', 'placeholder' => 'Cause of Death', 'id' => 'father_cause_of_death', 'name' => 'father_cause_of_death')) }}
						</div>
					</div>
					{{ $errors->first('father_cause_of_death', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Death -->

				<div class="form-group">
					{{ Form::label('father_age_at_death', 'Age at Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('father_age_at_death', Input::old('father_age_at_death'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'father_age_at_death', 'name' => 'father_age_at_death')) }}
						</div>
					</div>
					{{ $errors->first('father_age_at_death', '<span class="help-block">:message</span>') }}
				</div>

<h3>Mother</h3>


<!-- Medical Conditions -->

				<div class="form-group">
					{{ Form::label('mother_medical_conditions', 'Medical Conditions:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('mother_medical_conditions', Input::old('mother_medical_conditions'), array('class' => 'form-control', 'placeholder' => 'Medical Conditions', 'id' => 'mother_medical_conditions', 'name' => 'mother_medical_conditions')) }}
						</div>
					</div>
					{{ $errors->first('mother_medical_conditions', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Onset/Event   -->

				<div class="form-group">
					{{ Form::label('mother_age_at_event', 'Age at Onset/Event:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('mother_age_at_event', Input::old('mother_age_at_event'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'mother_age_at_event', 'name' => 'mother_age_at_event')) }}
						</div>
					</div>
					{{ $errors->first('mother_age_at_event', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age if Living -->

				<div class="form-group">
					{{ Form::label('mother_age_if_living', 'Age if Living:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('mother_age_if_living', Input::old('mother_age_if_living'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'mother_age_if_living', 'name' => 'mother_age_if_living')) }}
						</div>
					</div>
					{{ $errors->first('mother_age_if_living', '<span class="help-block">:message</span>') }}
				</div>

<!-- Cause of Death  -->

				<div class="form-group">
					{{ Form::label('mother_cause_of_death', 'Cause of Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('mother_cause_of_death', Input::old('mother_cause_of_death'), array('class' => 'form-control', 'placeholder' => 'Cause of Death', 'id' => 'mother_cause_of_death', 'name' => 'mother_cause_of_death')) }}
						</div>
					</div>
					{{ $errors->first('mother_cause_of_death', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Death -->

				<div class="form-group">
					{{ Form::label('mother_age_at_death', 'Age at Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('mother_age_at_death', Input::old('mother_age_at_death'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'mother_age_at_death', 'name' => 'mother_age_at_death')) }}
						</div>
					</div>
					{{ $errors->first('mother_age_at_death', '<span class="help-block">:message</span>') }}
				</div>


<h3>Brothers</h3>


<!-- Medical Conditions -->

				<div class="form-group">
					{{ Form::label('brother_medical_conditions', 'Medical Conditions:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('brother_medical_conditions', Input::old('brother_medical_conditions'), array('class' => 'form-control', 'placeholder' => 'Medical Conditions', 'id' => 'brother_medical_conditions', 'name' => 'brother_medical_conditions')) }}
						</div>
					</div>
					{{ $errors->first('brother_medical_conditions', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Onset/Event   -->

				<div class="form-group">
					{{ Form::label('brother_age_at_event', 'Age at Onset/Event:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('brother_age_at_event', Input::old('brother_age_at_event'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'brother_age_at_event', 'name' => 'brother_age_at_event')) }}
						</div>
					</div>
					{{ $errors->first('brother_age_at_event', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age if Living -->

				<div class="form-group">
					{{ Form::label('brother_age_if_living', 'Age if Living:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('brother_age_if_living', Input::old('brother_age_if_living'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'brother_age_if_living', 'name' => 'brother_age_if_living')) }}
						</div>
					</div>
					{{ $errors->first('brother_age_if_living', '<span class="help-block">:message</span>') }}
				</div>

<!-- Cause of Death  -->

				<div class="form-group">
					{{ Form::label('brother_cause_of_death', 'Cause of Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('brother_cause_of_death', Input::old('brother_cause_of_death'), array('class' => 'form-control', 'placeholder' => 'Cause of Death', 'id' => 'brother_cause_of_death', 'name' => 'brother_cause_of_death')) }}
						</div>
					</div>
					{{ $errors->first('brother_cause_of_death', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Death -->

				<div class="form-group">
					{{ Form::label('brother_age_at_death', 'Age at Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('brother_age_at_death', Input::old('brother_age_at_death'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'brother_age_at_death', 'name' => 'brother_age_at_death')) }}
						</div>
					</div>
					{{ $errors->first('brother_age_at_death', '<span class="help-block">:message</span>') }}
				</div>


<h3>Sisters</h3>


<!-- Medical Conditions -->

				<div class="form-group">
					{{ Form::label('sister_medical_conditions', 'Medical Conditions:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('sister_medical_conditions', Input::old('sister_medical_conditions'), array('class' => 'form-control', 'placeholder' => 'Medical Conditions', 'id' => 'sister_medical_conditions', 'name' => 'sister_medical_conditions')) }}
						</div>
					</div>
					{{ $errors->first('sister_medical_conditions', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Onset/Event   -->

				<div class="form-group">
					{{ Form::label('sister_age_at_event', 'Age at Onset/Event:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('sister_age_at_event', Input::old('sister_age_at_event'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'sister_age_at_event', 'name' => 'sister_age_at_event')) }}
						</div>
					</div>
					{{ $errors->first('sister_age_at_event', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age if Living -->

				<div class="form-group">
					{{ Form::label('sister_age_if_living', 'Age if Living:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('sister_age_if_living', Input::old('sister_age_if_living'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'sister_age_if_living', 'name' => 'sister_age_if_living')) }}
						</div>
					</div>
					{{ $errors->first('sister_age_if_living', '<span class="help-block">:message</span>') }}
				</div>

<!-- Cause of Death  -->

				<div class="form-group">
					{{ Form::label('sister_cause_of_death', 'Cause of Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('sister_cause_of_death', Input::old('sister_cause_of_death'), array('class' => 'form-control', 'placeholder' => 'Cause of Death', 'id' => 'sister_cause_of_death', 'name' => 'sister_cause_of_death')) }}
						</div>
					</div>
					{{ $errors->first('sister_cause_of_death', '<span class="help-block">:message</span>') }}
				</div>

<!-- Age at Death -->

				<div class="form-group">
					{{ Form::label('sister_age_at_death', 'Age at Death:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('sister_age_at_death', Input::old('sister_age_at_death'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'sister_age_at_death', 'name' => 'sister_age_at_death')) }}
						</div>
					</div>
					{{ $errors->first('sister_age_at_death', '<span class="help-block">:message</span>') }}
				</div>

			</div>	


<!-- MEDICAL HISTORY - Provide details to Yes answers in the Remarks section. Remarks - Explain All Yes Answers
Include provider, date, symptoms, diagnosis and treatment. Yes No Enter question number before
detailed response. -->

<p>Questions 1-16, have you ever consulted a member of the medical profession
regarding or have you been diagnosed or treated for:</p>

<!-- 1. High blood pressure, high cholesterol, abnormal electrocardiogram, chest
pain, irregular heart rhythm, palpitations, heart murmur, heart attack, angina,
phlebitis, peripheral vascular disease, or any other disease or disorder of
the heart or blood vessels   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="heart_problems">1. High blood pressure, high cholesterol, abnormal electrocardiogram, chest pain,<br>irregular heart rhythm, palpitations, heart murmur, heart attack, angina, phlebitis, peripheral<br>vascular disease, or any other disease or disorder of the heart or blood vessels</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="heart_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('heart_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('heart_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('heart_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="heart_problems_extra">

					<div class="form-group">
						{{ Form::label('heart_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('heart_problems_remarks', Input::old('heart_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'heart_problems_remarks', 'name' => 'heart_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('heart_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 2. Hepatitis, ulcer, internal bleeding, colitis, acid reflux, GERD, or any other
disease or disorder of the stomach, gall bladder, esophagus, liver, pancreas,
spleen, intestines, colon, or rectum?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="stomach_problems">2. Hepatitis, ulcer, internal bleeding, colitis, acid reflux, GERD, or any<br>other disease or disorder of the stomach, gall bladder, esophagus, liver, pancreas,<br>spleen, intestines, colon, or rectum?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="stomach_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('stomach_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('stomach_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('stomach_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="stomach_problems_extra">

					<div class="form-group">
						{{ Form::label('stomach_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('stomach_problems_remarks', Input::old('stomach_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'stomach_problems_remarks', 'name' => 'stomach_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('stomach_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 3. A disorder of your blood or immune system including anemia, blood clots,
bleeding, immune deficiency, leukemia, or lymphoma (excluding HIV)?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="blood_problems">3. A disorder of your blood or immune system including anemia, blood clots,<br>bleeding, immune deficiency, leukemia, or lymphoma (excluding HIV)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="blood_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('blood_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('blood_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('blood_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="blood_problems_extra">

					<div class="form-group">
						{{ Form::label('blood_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('blood_problems_remarks', Input::old('blood_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'blood_problems_remarks', 'name' => 'blood_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('blood_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 4. Cancer, tumor, melanoma, or any other malignant disorder?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="malignant_problems">4. Cancer, tumor, melanoma, or any other malignant disorder?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="malignant_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('malignant_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('malignant_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('malignant_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="malignant_problems_extra">

					<div class="form-group">
						{{ Form::label('malignant_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('malignant_problems_remarks', Input::old('malignant_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'malignant_problems_remarks', 'name' => 'malignant_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('malignant_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 5. Diabetes or high blood sugar or any other disease or disorder of the pituitary,
thyroid, or endocrine glands? 	  -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="gland_problems">5. Diabetes or high blood sugar or any other disease<br>or disorder of the pituitary, thyroid, or endocrine glands?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="gland_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('gland_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('gland_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('gland_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="gland_problems_extra">

					<div class="form-group">
						{{ Form::label('gland_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('gland_problems_remarks', Input::old('gland_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'gland_problems_remarks', 'name' => 'gland_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('gland_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 6. Albumin, protein, blood or sugar in the urine or any other disease or disorder
of the kidney or bladder? 	  -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="bladder_problems">Albumin, protein, blood or sugar in the urine or any<br>other disease or disorder of the kidney or bladder?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="bladder_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('bladder_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('bladder_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('bladder_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="bladder_problems_extra">

					<div class="form-group">
						{{ Form::label('bladder_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('bladder_problems_remarks', Input::old('bladder_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'bladder_problems_remarks', 'name' => 'bladder_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('bladder_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 7. Cyst, polyp, lump, or other growth, or any disease or disorder of the skin or
lymph nodes? 	 -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="skin_problems">Cyst, polyp, lump, or other growth, or any disease or disorder of the skin or lymph nodes?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="skin_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('skin_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('skin_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('skin_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="skin_problems_extra">

					<div class="form-group">
						{{ Form::label('skin_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('skin_problems_remarks', Input::old('skin_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'skin_problems_remarks', 'name' => 'skin_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('skin_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 8. Any disease or disorder of the uterus, cervix, ovaries, or breasts?   -->
						
				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="female_problems">Any disease or disorder of the uterus, cervix, ovaries, or breasts?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="female_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('female_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('female_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('female_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="female_problems_extra">

					<div class="form-group">
						{{ Form::label('female_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('female_problems_remarks', Input::old('female_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'female_problems_remarks', 'name' => 'female_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('female_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 9. Any disease or disorder of the prostate or reproductive system   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="reproductive_problems">9. Any disease or disorder of the prostate or reproductive system?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="reproductive_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('reproductive_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('reproductive_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('reproductive_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="reproductive_problems_extra">

					<div class="form-group">
						{{ Form::label('reproductive_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('reproductive_problems_remarks', Input::old('reproductive_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'reproductive_problems_remarks', 'name' => 'reproductive_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('reproductive_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 10. Any sexually transmitted disorders or diseases?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="std_problems">Any sexually transmitted disorders or diseases?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="std_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('std_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('std_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('std_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="std_problems_extra">

					<div class="form-group">
						{{ Form::label('std_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('std_problems_remarks', Input::old('std_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'std_problems_remarks', 'name' => 'std_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('std_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 11. Pregnancy, complications of pregnancy or infertility? 	  -->
				
				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="pregnancy_problems">Pregnancy, complications of pregnancy or infertility?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="pregnancy_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('pregnancy_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('pregnancy_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('pregnancy_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="pregnancy_problems_extra">

					<div class="form-group">
						{{ Form::label('pregnancy_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('pregnancy_problems_remarks', Input::old('pregnancy_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'pregnancy_problems_remarks', 'name' => 'pregnancy_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('pregnancy_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

<!-- If now pregnant, what is the expected date of delivery? -->

					<div class="form-group">
						{{ Form::label('expected_date_delivery', 'If now pregnant, what is the expected date of delivery:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('expected_date_delivery', Input::old('expected_date_delivery'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'date3', 'name' => 'expected_date_delivery')) }}
							</div>
						</div>
						{{ $errors->first('expected_date_delivery', '<span class="help-block">:message</span>') }}
					</div>

				</div>



<!-- 12. Asthma, shortness of breath, chronic cough or hoarseness, bronchitis,
emphysema, COPD (chronic obstructive pulmonary disease), sarcoidosis,
pneumonia, TB (tuberculosis), sleep apnea, or any other disorder of the
respiratory system?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="respiratory_problems">12. Asthma, shortness of breath, chronic cough or hoarseness, bronchitis,<br>emphysema, COPD (chronic obstructive pulmonary disease), sarcoidosis, pneumonia, TB (tuberculosis),<br>sleep apnea, or any other disorder of the respiratory system?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="respiratory_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('respiratory_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('respiratory_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('respiratory_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="respiratory_problems_extra">

					<div class="form-group">
						{{ Form::label('respiratory_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('respiratory_problems_remarks', Input::old('respiratory_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'respiratory_problems_remarks', 'name' => 'respiratory_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('respiratory_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 13. A disorder of the brain, spinal cord, or nervous system including chronic
headaches, convulsions or loss of consciousness, seizures, tremors, paralysis,
fainting, stroke, MS (multiple sclerosis), or TIA (transient ischemic attack)?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="nervous_system_problems">13. A disorder of the brain, spinal cord, or nervous system including chronic<br>headaches, convulsions or loss of consciousness, seizures, tremors, paralysis,<br>fainting, stroke, MS (multiple sclerosis), or TIA (transient ischemic attack)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="nervous_system_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('nervous_system_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('nervous_system_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('nervous_system_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="nervous_system_problems_extra">

					<div class="form-group">
						{{ Form::label('nervous_system_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('nervous_system_problems_remarks', Input::old('nervous_system_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'nervous_system_problems_remarks', 'name' => 'nervous_system_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('nervous_system_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 14. Depression, anxiety, psychosis, suicidal thoughts or attempts of suicide,
anorexia or bulimia, obsessive compulsive disorder, bipolar disorder, or
other mental, nervous or emotional disorder?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="mental_problems">14. Depression, anxiety, psychosis, suicidal thoughts or attempts of suicide,<br>anorexia or bulimia, obsessive compulsive disorder, bipolar disorder, or<br>other mental, nervous or emotional disorder?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="mental_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('mental_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('mental_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('mental_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="mental_problems_extra">

					<div class="form-group">
						{{ Form::label('mental_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('mental_problems_remarks', Input::old('mental_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'mental_problems_remarks', 'name' => 'mental_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('mental_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 15. Arthritis or disorder of the bones, skin or muscles?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="arthritis_problems">15. Arthritis or disorder of the bones, skin or muscles?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="arthritis_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('arthritis_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('arthritis_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('arthritis_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="arthritis_problems_extra">

					<div class="form-group">
						{{ Form::label('arthritis_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('arthritis_problems_remarks', Input::old('arthritis_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'arthritis_problems_remarks', 'name' => 'arthritis_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('arthritis_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 16. Any disease or disorder of the eyes, ears, nose or throat?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="head_problems">Any disease or disorder of the eyes, ears, nose or throat?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="head_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('head_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('head_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('head_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="head_problems_extra">

					<div class="form-group">
						{{ Form::label('head_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('head_problems_remarks', Input::old('head_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'head_problems_remarks', 'name' => 'head_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('head_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<p>17. In the last 5 years, unless previously stated on this application, have you:</p>


<!-- a. Been treated by a member of the medical profession or at a medical facility?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="past_treatment">a. Been treated by a member of the medical profession or at a medical facility?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="past_treatment">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('past_treatment', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('past_treatment', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('past_treatment', '<span class="help-block">:message</span>') }}
				</div>

				<div class="past_treatment_extra">

					<div class="form-group">
						{{ Form::label('past_treatment_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('past_treatment_remarks', Input::old('past_treatment_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'past_treatment_remarks', 'name' => 'past_treatment_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('past_treatment_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- b. Had an electrocardiogram, x-ray, blood test, or other diagnostic test,
excluding an HIV test?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="past_diagnostic_test">b. Had an electrocardiogram, x-ray, blood test,<br>or other diagnostic test, excluding an HIV test?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="past_diagnostic_test">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('past_diagnostic_test', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('past_diagnostic_test', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('past_diagnostic_test', '<span class="help-block">:message</span>') }}
				</div>

				<div class="past_diagnostic_test_extra">

					<div class="form-group">
						{{ Form::label('past_diagnostic_test_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('past_diagnostic_test_remarks', Input::old('past_diagnostic_test_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'past_diagnostic_test_remarks', 'name' => 'past_diagnostic_test_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('past_diagnostic_test_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- c. Had surgery or biopsy, or been an inpatient or outpatient in a hospital,
clinic, or other medical or mental health facility?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="past_patient">c. Had surgery or biopsy, or been an inpatient or outpatient<br>in a hospital, clinic, or other medical or mental health facility?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="past_patient">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('past_patient', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('past_patient', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('past_patient', '<span class="help-block">:message</span>') }}
				</div>

				<div class="past_patient_extra">

					<div class="form-group">
						{{ Form::label('past_patient_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('past_patient_remarks', Input::old('past_patient_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'past_patient_remarks', 'name' => 'past_patient_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('past_patient_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- d. Been advised by a member of the medical profession to have surgery,
medical treatment, biopsy, or diagnostic testing, excluding HIV testing,
that has not yet been completed?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="awaiting_treatment">d. Been advised by a member of the medical profession to have surgery,<br>medical treatment, biopsy, or diagnostic testing, excluding HIV testing,<br>that has not yet been completed?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="awaiting_treatment">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('awaiting_treatment', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('awaiting_treatment', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('awaiting_treatment', '<span class="help-block">:message</span>') }}
				</div>

				<div class="awaiting_treatment_extra">

					<div class="form-group">
						{{ Form::label('awaiting_treatment_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('awaiting_treatment_remarks', Input::old('awaiting_treatment_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'awaiting_treatment_remarks', 'name' => 'awaiting_treatment_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('awaiting_treatment_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- e. Been referred to any other member of the medical profession or medical
facility?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="referred_elsewhere">e. Been referred to any other member of the medical profession<br>or medical facility?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="referred_elsewhere">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('referred_elsewhere', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('referred_elsewhere', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('referred_elsewhere', '<span class="help-block">:message</span>') }}
				</div>

				<div class="referred_elsewhere_extra">

					<div class="form-group">
						{{ Form::label('referred_elsewhere_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('referred_elsewhere_remarks', Input::old('referred_elsewhere_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'referred_elsewhere_remarks', 'name' => 'referred_elsewhere_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('referred_elsewhere_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- f. Been unable to work, attend school or perform the normal activities of like
age and gender, or been confined at home?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="disabled_problems">f. Been unable to work, attend school or perform the normal<br> activities of like age and gender, or been confined at home?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="disabled_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('disabled_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('disabled_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('disabled_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="disabled_problems_extra">

					<div class="form-group">
						{{ Form::label('disabled_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('disabled_problems_remarks', Input::old('disabled_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'disabled_problems_remarks', 'name' => 'disabled_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('disabled_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 18. a. Have you ever used amphetamines, barbiturates, cocaine, heroin, crack,
marijuana, LSD, PCP, or other illegal, restricted or controlled substances,
except as prescribed by a licensed physician?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="illegal_drugs">18. a. Have you ever used amphetamines, barbiturates, cocaine, heroin, crack,<br>marijuana, LSD, PCP, or other illegal, restricted or controlled substances,<br>except as prescribed by a licensed physician?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="illegal_drugs">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('illegal_drugs', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('illegal_drugs', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('illegal_drugs', '<span class="help-block">:message</span>') }}
				</div>

				<div class="illegal_drugs_extra">


<p>If Yes, please provide dates of use:</p> 

<!-- From  -->

					<div class="form-group">
						{{ Form::label('illegal_drugs_from', 'From:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('illegal_drugs_from', Input::old('illegal_drugs_from'), array('class' => 'form-control', 'placeholder' => 'Age', 'id' => 'date4', 'name' => 'illegal_drugs_from')) }}
							</div>
						</div>
						{{ $errors->first('illegal_drugs_from', '<span class="help-block">:message</span>') }}
					</div>

<!-- To -->

					<div class="form-group">
						{{ Form::label('illegal_drugs_to', 'To:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('illegal_drugs_to', Input::old('illegal_drugs_to'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date5', 'name' => 'illegal_drugs_to')) }}
							</div>
						</div>
						{{ $errors->first('illegal_drugs_to', '<span class="help-block">:message</span>') }}
					</div>

<!-- Name of drug used:  -->

					<div class="form-group">
						{{ Form::label('illegal_drugs_name', 'Name of Drug Used:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('illegal_drugs_name', Input::old('illegal_drugs_name'), array('class' => 'form-control', 'placeholder' => 'Name', 'id' => 'illegal_drugs_name', 'name' => 'illegal_drugs_name')) }}
							</div>
						</div>
						{{ $errors->first('illegal_drugs_name', '<span class="help-block">:message</span>') }}
					</div>

<!-- Amount and frequency of use: -->

					<div class="form-group">
						{{ Form::label('amount_frequency', 'Amount and frequency of use:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('amount_frequency', Input::old('amount_frequency'), array('class' => 'form-control', 'placeholder' => 'Amount/Frequency', 'id' => 'amount_frequency', 'name' => 'amount_frequency')) }}
							</div>
						</div>
						{{ $errors->first('amount_frequency', '<span class="help-block">:message</span>') }}
					</div>

<!-- Extra Space -->

					<div class="form-group">
						{{ Form::label('illegal_drugs_remarks', 'If more space is needed, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('illegal_drugs_remarks', Input::old('illegal_drugs_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'illegal_drugs_remarks', 'name' => 'illegal_drugs_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('illegal_drugs_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 19 b. Have you ever been addicted to prescription medication or been advised
by a physician to discontinue using habit forming drugs?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="addicted_prescription">19 b. Have you ever been addicted to prescription medication<br>or been advised by a physician to discontinue using habit forming drugs?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="addicted_prescription">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('addicted_prescription', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('addicted_prescription', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('addicted_prescription', '<span class="help-block">:message</span>') }}
				</div>

				<div class="addicted_prescription_extra">

<p>If Yes, provide dates of use:</p>

<!-- From  -->

					<div class="form-group">
						{{ Form::label('addicted_prescription_from', 'From:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('addicted_prescription_from', Input::old('addicted_prescription_from'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date4', 'name' => 'addicted_prescription_from')) }}
							</div>
						</div>
						{{ $errors->first('addicted_prescription_from', '<span class="help-block">:message</span>') }}
					</div>

<!-- To -->

					<div class="form-group">
						{{ Form::label('addicted_prescription_to', 'To:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('addicted_prescription_to', Input::old('addicted_prescription_to'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date5', 'name' => 'addicted_prescription_to')) }}
							</div>
						</div>
						{{ $errors->first('addicted_prescription_to', '<span class="help-block">:message</span>') }}
					</div>

 <!-- type  -->

					<div class="form-group">
						{{ Form::label('addicted_prescription_type', 'Type:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('addicted_prescription_type', Input::old('addicted_prescription_type'), array('class' => 'form-control', 'placeholder' => 'Type', 'id' => 'addicted_prescription_type', 'name' => 'addicted_prescription_type')) }}
							</div>
						</div>
						{{ $errors->first('addicted_prescription_type', '<span class="help-block">:message</span>') }}
					</div>

 <!-- frequency -->

					<div class="form-group">
						{{ Form::label('addicted_prescription_frequency', 'Frequency:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('addicted_prescription_frequency', Input::old('addicted_prescription_frequency'), array('class' => 'form-control', 'placeholder' => 'Frequency', 'id' => 'addicted_prescription_frequency', 'name' => 'addicted_prescription_frequency')) }}
							</div>
						</div>
						{{ $errors->first('addicted_prescription_frequency', '<span class="help-block">:message</span>') }}
					</div>

<!-- Extra Space -->

					<div class="form-group">
						{{ Form::label('addicted_prescription_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('addicted_prescription_remarks', Input::old('addicted_prescription_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'addicted_prescription_remarks', 'name' => 'addicted_prescription_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('addicted_prescription_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>


<p>20. Have you ever:</p>

<!-- a. Consumed alcoholic beverages?  
 -->
				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="alcoholic_beverage">a. Consumed alcoholic beverages?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="alcoholic_beverage">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('alcoholic_beverage', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('alcoholic_beverage', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('alcoholic_beverage', '<span class="help-block">:message</span>') }}
				</div>

				<div class="alcoholic_beverage_extra">

<!-- If Yes, give  -->

<!-- type -->

					<div class="form-group">
						{{ Form::label('alcoholic_beverage_type', 'Frequency:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('alcoholic_beverage_type', Input::old('alcoholic_beverage_type'), array('class' => 'form-control', 'placeholder' => 'Type', 'id' => 'alcoholic_beverage_type', 'name' => 'alcoholic_beverage_type')) }}
							</div>
						</div>
						{{ $errors->first('alcoholic_beverage_type', '<span class="help-block">:message</span>') }}
					</div>


<!-- number of drinks per day and/or per week. -->

					<div class="form-group">
						{{ Form::label('alcoholic_beverage_total', 'Number of drinks per day and/or per week:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('alcoholic_beverage_total', Input::old('alcoholic_beverage_total'), array('class' => 'form-control', 'placeholder' => 'Total number', 'id' => 'alcoholic_beverage_total', 'name' => 'alcoholic_beverage_total')) }}
							</div>
						</div>
						{{ $errors->first('alcoholic_beverage_total', '<span class="help-block">:message</span>') }}
					</div>

<!-- Date of last consumption: -->

					<div class="form-group">
						{{ Form::label('alcoholic_beverage_date', 'Frequency:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::text('alcoholic_beverage_date', Input::old('alcoholic_beverage_date'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date6', 'name' => 'alcoholic_beverage_date')) }}
							</div>
						</div>
						{{ $errors->first('alcoholic_beverage_date', '<span class="help-block">:message</span>') }}
					</div>

<!-- Extra space -->

					<div class="form-group">
						{{ Form::label('alcoholic_beverage_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('alcoholic_beverage_remarks', Input::old('alcoholic_beverage_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'alcoholic_beverage_remarks', 'name' => 'alcoholic_beverage_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('alcoholic_beverage_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- b. Been advised by a physician or other licensed medical practitioner to limit
or cease the use of alcoholic beverages?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="restricted_alcohol">b. Been advised by a physician or other licensed medical practitioner to limit<br>or cease the use of alcoholic beverages?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="restricted_alcohol">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('restricted_alcohol', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('restricted_alcohol', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('restricted_alcohol', '<span class="help-block">:message</span>') }}
				</div>

				<div class="restricted_alcohol_extra">

					<div class="form-group">
						{{ Form::label('restricted_alcohol_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('restricted_alcohol_remarks', Input::old('restricted_alcohol_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'restricted_alcohol_remarks', 'name' => 'restricted_alcohol_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('restricted_alcohol_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- c. Been counseled, sought help or treatment, or been advised by a physician
or other licensed medical practitioner to undergo counseling or treatment
for alcohol problems?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="alcohol_problems">c. Been counseled, sought help or treatment, or been advised by a physician<br>or other licensed medical practitioner to undergo counseling or treatment<br>for alcohol problems?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="alcohol_problems">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('alcohol_problems', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('alcohol_problems', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('alcohol_problems', '<span class="help-block">:message</span>') }}
				</div>

				<div class="alcohol_problems_extra">

					<div class="form-group">
						{{ Form::label('alcohol_problems_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('alcohol_problems_remarks', Input::old('alcohol_problems_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'alcohol_problems_remarks', 'name' => 'alcohol_problems_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('alcohol_problems_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- d. Attended or joined any organization due to alcohol or related problems?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="alchohol_org">d. Attended or joined any organization due to alcohol or related problems?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="alchohol_org">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('alchohol_org', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('alchohol_org', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('alchohol_org', '<span class="help-block">:message</span>') }}
				</div>

				<div class="alchohol_org_extra">

					<div class="form-group">
						{{ Form::label('alchohol_org_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('alchohol_org_remarks', Input::old('alchohol_org_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'alchohol_org_remarks', 'name' => 'alchohol_org_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('alchohol_org_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<p>21. Are you currently:</p>

<!-- a. Taking or have you been advised to take any prescribed medication
(other than contraceptives)?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="prescribed_medication">a. Taking or have you been advised to take any prescribed medication<br>(other than contraceptives)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="prescribed_medication">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('prescribed_medication', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('prescribed_medication', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('prescribed_medication', '<span class="help-block">:message</span>') }}
				</div>

				<div class="prescribed_medication_extra">

					<div class="form-group">
						{{ Form::label('prescribed_medication_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('prescribed_medication_remarks', Input::old('prescribed_medication_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'prescribed_medication_remarks', 'name' => 'prescribed_medication_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('prescribed_medication_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- b. Taking any herbal or non-prescription medication at least weekly?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="herbal_medication">b. Taking any herbal or non-prescription medication at least weekly?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="herbal_medication">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('herbal_medication', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('herbal_medication', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('herbal_medication', '<span class="help-block">:message</span>') }}
				</div>

				<div class="herbal_medication_extra">

<!-- If Yes, give details.  -->

					<div class="form-group">
						{{ Form::label('herbal_medication_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('herbal_medication_remarks', Input::old('herbal_medication_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'herbal_medication_remarks', 'name' => 'herbal_medication_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('herbal_medication_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>


<!-- 22. Have you taken any other medications in the past 2 years?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="other_medication">22. Have you taken any other medications in the past 2 years?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="other_medication">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('other_medication', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('other_medication', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('other_medication', '<span class="help-block">:message</span>') }}
				</div>

				<div class="other_medication_extra">

<!-- If Yes, list in Remarks section at right. -->

					<div class="form-group">
						{{ Form::label('other_medication_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('other_medication_remarks', Input::old('other_medication_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'other_medication_remarks', 'name' => 'other_medication_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('other_medication_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>


<!-- 23. Have you tested positive for exposure to the HIV infection or been diagnosed
as having ARC (AIDS-Related Complex) or AIDS (Auto Immune Deficiency
Syndrome) caused by HIV infection or other sickness or condition derived
from such infection?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="std_positive">23. Have you tested positive for exposure to the HIV infection or been diagnosed<br>as having ARC (AIDS-Related Complex) or AIDS (Auto Immune Deficiency<br>Syndrome) caused by HIV infection or other sickness or condition derived<br>from such infection?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="std_positive">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('std_positive', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('std_positive', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('std_positive', '<span class="help-block">:message</span>') }}
				</div>

				<div class="std_positive_extra">

					<div class="form-group">
						{{ Form::label('std_positive_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('std_positive_remarks', Input::old('std_positive_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'std_positive_remarks', 'name' => 'std_positive_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('std_positive_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

<!-- 24. In the past 5 years, have you been diagnosed, treated, tested positive for, or been
given medical advice by a member of the medical profession for any disease or
disorder not previously stated on this application?   -->

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="positive_other">24. In the past 5 years, have you been diagnosed, treated, tested positive for, or been<br>given medical advice by a member of the medical profession for any disease or<br>disorder not previously stated on this application?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons" id="positive_other">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('positive_other', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('positive_other', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('positive_other', '<span class="help-block">:message</span>') }}
				</div>

				<div class="positive_other_extra">

<!-- If Yes, give details. -->

					<div class="form-group">
						{{ Form::label('positive_other_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('positive_other_remarks', Input::old('positive_other_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'positive_other_remarks', 'name' => 'positive_other_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('positive_other_remarks', '<span class="help-block">:message</span>') }}
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



	<script>

		$(document).ready(function() {

			

			$('.weight_change_extra').hide();
			$('.family_history_extra').hide();
			$('.heart_problems_extra').hide();
		 	$('.stomach_problems_extra').hide();
		 	$('.blood_problems_extra').hide();
		 	$('.malignant_problems_extra').hide();
		 	$('.gland_problems_extra').hide();
		 	$('.bladder_problems_extra').hide();
		 	$('.skin_problems_extra').hide();
		 	$('.female_problems_extra').hide();
		 	$('.reproductive_problems_extra').hide();
		 	$('.std_problems_extra').hide();
		 	$('.pregnancy_problems_extra').hide();
		 	$('.respiratory_problems_extra').hide();
		 	$('.nervous_system_problems_extra').hide();
		 	$('.mental_problems_extra').hide();
		 	$('.arthritis_problems_extra').hide();
		 	$('.head_problems_extra').hide();
		 	$('.past_treatment_extra').hide();
		 	$('.past_diagnostic_test_extra').hide();
		 	$('.past_patient_extra').hide();
		 	$('.awaiting_treatment_extra').hide();
		 	$('.referred_elsewhere_extra').hide();
		 	$('.disabled_problems_extra').hide();
		 	$('.illegal_drugs_extra').hide();
		 	$('.addicted_prescription_extra').hide();
		 	$('.alcoholic_beverage_extra').hide();
		 	$('.restricted_alcohol_extra').hide();
		 	$('.alcohol_problems_extra').hide();
		 	$('.alchohol_org_extra').hide();
		 	$('.prescribed_medication_extra').hide();
		 	$('.herbal_medication_extra').hide();
		 	$('.other_medication_extra').hide();
		 	$('.std_positive_extra').hide();
		 	$('.positive_other_extra').hide();


			$( "#weight_change" ).on('click', function(){
				var value = $('input:radio[name=weight_change]:checked').val();
				console.log(value);

				if (value == 'Yes'){

					$('.weight_change_extra').slideDown(900);

				} else {

					$('.weight_change_extra').slideUp(900);

				}
			});

			$( "#family_history" ).on('click', function(){
				var value = $('input:radio[name=family_history]:checked').val();

				if (value == 'Yes'){

					$('.family_history_extra').slideDown(1500);

				} else {

					$('.family_history_extra').slideUp(1500);

				}
			});

			$( "#heart_problems" ).on('click', function(){
				var value = $('input:radio[name=heart_problems]:checked').val();

				if (value == 'Yes'){

					$('.heart_problems_extra').slideDown(900);

				} else {

					$('.heart_problems_extra').slideUp(900);

				}
			});

			$( "#stomach_problems" ).on('click', function(){
				var value = $('input:radio[name=stomach_problems]:checked').val();

				if (value == 'Yes'){

					$('.stomach_problems_extra').slideDown(900);

				} else {

					$('.stomach_problems_extra').slideUp(900);

				}
			});

			$( "#blood_problems" ).on('click', function(){
				var value = $('input:radio[name=blood_problems]:checked').val();

				if (value == 'Yes'){

					$('.blood_problems_extra').slideDown(900);

				} else {

					$('.blood_problems_extra').slideUp(900);

				}
			});

			$( "#malignant_problems" ).on('click', function(){
				var value = $('input:radio[name=malignant_problems]:checked').val();

				if (value == 'Yes'){

					$('.malignant_problems_extra').slideDown(900);

				} else {

					$('.malignant_problems_extra').slideUp(900);

				}
			});

			$( "#gland_problems" ).on('click', function(){
				var value = $('input:radio[name=gland_problems]:checked').val();

				if (value == 'Yes'){

					$('.gland_problems_extra').slideDown(900);

				} else {

					$('.gland_problems_extra').slideUp(900);

				}
			});

			$( "#bladder_problems" ).on('click', function(){
				var value = $('input:radio[name=bladder_problems]:checked').val();

				if (value == 'Yes'){

					$('.bladder_problems_extra').slideDown(900);

				} else {

					$('.bladder_problems_extra').slideUp(900);

				}
			});

			$( "#skin_problems" ).on('click', function(){
				var value = $('input:radio[name=skin_problems]:checked').val();

				if (value == 'Yes'){

					$('.skin_problems_extra').slideDown(900);

				} else {

					$('.skin_problems_extra').slideUp(900);

				}
			});

			$( "#female_problems" ).on('click', function(){
				var value = $('input:radio[name=female_problems]:checked').val();

				if (value == 'Yes'){

					$('.female_problems_extra').slideDown(900);

				} else {

					$('.female_problems_extra').slideUp(900);

				}
			});

			$( "#reproductive_problems" ).on('click', function(){
				var value = $('input:radio[name=reproductive_problems]:checked').val();

				if (value == 'Yes'){

					$('.reproductive_problems_extra').slideDown(900);

				} else {

					$('.reproductive_problems_extra').slideUp(900);

				}
			});

			$( "#std_problems" ).on('click', function(){
				var value = $('input:radio[name=std_problems]:checked').val();

				if (value == 'Yes'){

					$('.std_problems_extra').slideDown(900);

				} else {

					$('.std_problems_extra').slideUp(900);

				}
			});

			$( "#pregnancy_problems" ).on('click', function(){
				var value = $('input:radio[name=pregnancy_problems]:checked').val();

				if (value == 'Yes'){

					$('.pregnancy_problems_extra').slideDown(900);

				} else {

					$('.pregnancy_problems_extra').slideUp(900);

				}
			});

			$( "#respiratory_problems" ).on('click', function(){
				var value = $('input:radio[name=respiratory_problems]:checked').val();

				if (value == 'Yes'){

					$('.respiratory_problems_extra').slideDown(900);

				} else {

					$('.respiratory_problems_extra').slideUp(900);

				}
			});

			$( "#nervous_system_problems" ).on('click', function(){
				var value = $('input:radio[name=nervous_system_problems]:checked').val();

				if (value == 'Yes'){

					$('.nervous_system_problems_extra').slideDown(900);

				} else {

					$('.nervous_system_problems_extra').slideUp(900);

				}
			});

			$( "#mental_problems" ).on('click', function(){
				var value = $('input:radio[name=mental_problems]:checked').val();

				if (value == 'Yes'){

					$('.mental_problems_extra').slideDown(900);

				} else {

					$('.mental_problems_extra').slideUp(900);

				}
			});

			$( "#arthritis_problems" ).on('click', function(){
				var value = $('input:radio[name=arthritis_problems]:checked').val();

				if (value == 'Yes'){

					$('.arthritis_problems_extra').slideDown(900);

				} else {

					$('.arthritis_problems_extra').slideUp(900);

				}
			});

			$( "#head_problems" ).on('click', function(){
				var value = $('input:radio[name=head_problems]:checked').val();

				if (value == 'Yes'){

					$('.head_problems_extra').slideDown(900);

				} else {

					$('.head_problems_extra').slideUp(900);

				}
			});

			$( "#past_treatment" ).on('click', function(){
				var value = $('input:radio[name=past_treatment]:checked').val();

				if (value == 'Yes'){

					$('.past_treatment_extra').slideDown(900);

				} else {

					$('.past_treatment_extra').slideUp(900);

				}
			});

			$( "#past_diagnostic_test" ).on('click', function(){
				var value = $('input:radio[name=past_diagnostic_test]:checked').val();

				if (value == 'Yes'){

					$('.past_diagnostic_test_extra').slideDown(900);

				} else {

					$('.past_diagnostic_test_extra').slideUp(900);

				}
			});


			$( "#past_patient" ).on('click', function(){
				var value = $('input:radio[name=past_patient]:checked').val();

				if (value == 'Yes'){

					$('.past_patient_extra').slideDown(900);

				} else {

					$('.past_patient_extra').slideUp(900);

				}
			});

			$( "#awaiting_treatment" ).on('click', function(){
				var value = $('input:radio[name=awaiting_treatment]:checked').val();

				if (value == 'Yes'){

					$('.awaiting_treatment_extra').slideDown(900);

				} else {

					$('.awaiting_treatment_extra').slideUp(900);

				}
			});

			$( "#referred_elsewhere" ).on('click', function(){
				var value = $('input:radio[name=referred_elsewhere]:checked').val();

				if (value == 'Yes'){

					$('.referred_elsewhere_extra').slideDown(900);

				} else {

					$('.referred_elsewhere_extra').slideUp(900);

				}
			});

			$( "#disabled_problems" ).on('click', function(){
				var value = $('input:radio[name=disabled_problems]:checked').val();

				if (value == 'Yes'){

					$('.disabled_problems_extra').slideDown(900);

				} else {

					$('.disabled_problems_extra').slideUp(900);

				}
			});

			$( "#illegal_drugs" ).on('click', function(){
				var value = $('input:radio[name=illegal_drugs]:checked').val();

				if (value == 'Yes'){

					$('.illegal_drugs_extra').slideDown(900);

				} else {

					$('.illegal_drugs_extra').slideUp(900);

				}
			});

			$( "#addicted_prescription" ).on('click', function(){
				var value = $('input:radio[name=addicted_prescription]:checked').val();

				if (value == 'Yes'){

					$('.addicted_prescription_extra').slideDown(900);

				} else {

					$('.addicted_prescription_extra').slideUp(900);

				}
			});

			$( "#alcoholic_beverage" ).on('click', function(){
				var value = $('input:radio[name=alcoholic_beverage]:checked').val();

				if (value == 'Yes'){

					$('.alcoholic_beverage_extra').slideDown(900);

				} else {

					$('.alcoholic_beverage_extra').slideUp(900);

				}
			});

			$( "#restricted_alcohol" ).on('click', function(){
				var value = $('input:radio[name=restricted_alcohol]:checked').val();

				if (value == 'Yes'){

					$('.restricted_alcohol_extra').slideDown(900);

				} else {

					$('.restricted_alcohol_extra').slideUp(900);

				}
			});

			$( "#alcohol_problems" ).on('click', function(){
				var value = $('input:radio[name=alcohol_problems]:checked').val();

				if (value == 'Yes'){

					$('.alcohol_problems_extra').slideDown(900);

				} else {

					$('.alcohol_problems_extra').slideUp(900);

				}
			});

			$( "#alchohol_org" ).on('click', function(){
				var value = $('input:radio[name=alchohol_org]:checked').val();

				if (value == 'Yes'){

					$('.alchohol_org_extra').slideDown(900);

				} else {

					$('.alchohol_org_extra').slideUp(900);

				}
			});


			$( "#prescribed_medication" ).on('click', function(){
				var value = $('input:radio[name=prescribed_medication]:checked').val();

				if (value == 'Yes'){

					$('.prescribed_medication_extra').slideDown(900);

				} else {

					$('.prescribed_medication_extra').slideUp(900);

				}
			});


			$( "#herbal_medication" ).on('click', function(){
				var value = $('input:radio[name=herbal_medication]:checked').val();

				if (value == 'Yes'){

					$('.herbal_medication_extra').slideDown(900);

				} else {

					$('.herbal_medication_extra').slideUp(900);

				}
			});

			$( "#other_medication" ).on('click', function(){
				var value = $('input:radio[name=other_medication]:checked').val();

				if (value == 'Yes'){

					$('.other_medication_extra').slideDown(900);

				} else {

					$('.other_medication_extra').slideUp(900);

				}
			});

			$( "#std_positive" ).on('click', function(){
				var value = $('input:radio[name=std_positive]:checked').val();

				if (value == 'Yes'){

					$('.std_positive_extra').slideDown(900);

				} else {

					$('.std_positive_extra').slideUp(900);

				}
			});

			$( "#positive_other" ).on('click', function(){
				var value = $('input:radio[name=positive_other]:checked').val();

				if (value == 'Yes'){

					$('.positive_other_extra').slideDown(900);

				} else {

					$('.positive_other_extra').slideUp(900);

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