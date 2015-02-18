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
				<div class="btn-group btn-toggle" data-toggle="buttons">
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

			<div class="weight_change">

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
				<div class="btn-group btn-toggle" data-toggle="buttons">
					<label class="btn btn-mini btn-default" for="">
						{{Form::radio('family_history', 'Yes') }} Yes
					</label>
					<label class="btn btn-mini btn-info" for="">
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

<p>Questions 7-22, have you ever consulted a member of the medical profession
regarding or have you been diagnosed or treated for:</p>

1. High blood pressure, high cholesterol, abnormal electrocardiogram, chest
pain, irregular heart rhythm, palpitations, heart murmur, heart attack, angina,
phlebitis, peripheral vascular disease, or any other disease or disorder of
the heart or blood vessels  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

2. Hepatitis, ulcer, internal bleeding, colitis, acid reflux, GERD, or any other
disease or disorder of the stomach, gall bladder, esophagus, liver, pancreas,
spleen, intestines, colon, or rectum?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

3. A disorder of your blood or immune system including anemia, blood clots,
bleeding, immune deficiency, leukemia, or lymphoma (excluding HIV)?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

4. Cancer, tumor, melanoma, or any other malignant disorder?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

5. Diabetes or high blood sugar or any other disease or disorder of the pituitary,
thyroid, or endocrine glands? 	 

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

6. Albumin, protein, blood or sugar in the urine or any other disease or disorder
of the kidney or bladder? 	 

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

7. Cyst, polyp, lump, or other growth, or any disease or disorder of the skin or
lymph nodes? 	

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

8. Any disease or disorder of the uterus, cervix, ovaries, or breasts?  
						
				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

9. Any disease or disorder of the prostate or reproductive system  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

10. Any sexually transmitted disorders or diseases?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

11. Pregnancy, complications of pregnancy or infertility? 	 
				
				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

If now pregnant, what is the expected date of delivery?

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



12. Asthma, shortness of breath, chronic cough or hoarseness, bronchitis,
emphysema, COPD (chronic obstructive pulmonary disease), sarcoidosis,
pneumonia, TB (tuberculosis), sleep apnea, or any other disorder of the
respiratory system?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

13. A disorder of the brain, spinal cord, or nervous system including chronic
headaches, convulsions or loss of consciousness, seizures, tremors, paralysis,
fainting, stroke, MS (multiple sclerosis), or TIA (transient ischemic attack)?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

14. Depression, anxiety, psychosis, suicidal thoughts or attempts of suicide,
anorexia or bulimia, obsessive compulsive disorder, bipolar disorder, or
other mental, nervous or emotional disorder?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

15. Arthritis or disorder of the bones, skin or muscles?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

16. Any disease or disorder of the eyes, ears, nose or throat?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

17. In the last 5 years, unless previously stated on this application, have you:
a. Been treated by a member of the medical profession or at a medical facility?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

b. Had an electrocardiogram, x-ray, blood test, or other diagnostic test,
excluding an HIV test?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

c. Had surgery or biopsy, or been an inpatient or outpatient in a hospital,
clinic, or other medical or mental health facility?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

d. Been advised by a member of the medical profession to have surgery,
medical treatment, biopsy, or diagnostic testing, excluding HIV testing,
that has not yet been completed?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

e. Been referred to any other member of the medical profession or medical
facility?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

f. Been unable to work, attend school or perform the normal activities of like
age and gender, or been confined at home?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

18. a. Have you ever used amphetamines, barbiturates, cocaine, heroin, crack,
marijuana, LSD, PCP, or other illegal, restricted or controlled substances,
except as prescribed by a licensed physician?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

If Yes, please provide dates of use: 
From 
To
Name of drug used: 
Amount and frequency of use:

19 b. Have you ever been addicted to prescription medication or been advised
by a physician to discontinue using habit forming drugs?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

If Yes, provide dates of use, type and frequency.

20. Have you ever:

a. Consumed alcoholic beverages?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

If Yes, give type and number of drinks per day and/or per week.
Date of last consumption:

b. Been advised by a physician or other licensed medical practitioner to limit
or cease the use of alcoholic beverages?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

c. Been counseled, sought help or treatment, or been advised by a physician
or other licensed medical practitioner to undergo counseling or treatment
for alcohol problems?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

d. Attended or joined any organization due to alcohol or related problems?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

21. Are you currently:

a. Taking or have you been advised to take any prescribed medication
(other than contraceptives)?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

b. Taking any herbal or non-prescription medication at least weekly?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

If Yes, give details. 

22. Have you taken any other medications in the past 2 years?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

If Yes, list in Remarks section at right.

23. Have you tested positive for exposure to the HIV infection or been diagnosed
as having ARC (AIDS-Related Complex) or AIDS (Auto Immune Deficiency
Syndrome) caused by HIV infection or other sickness or condition derived
from such infection?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

24. In the past 5 years, have you been diagnosed, treated, tested positive for, or been
given medical advice by a member of the medical profession for any disease or
disorder not previously stated on this application?  

				<div class="form-group">
				<div class="controls">
					<label class="control-label" for="family_history">Has a parent or sibling ever been diagnosed or treated by a member of the medical profession<br>for heart or kidney disease, stroke, diabetes, cancer, melanoma, suicide, Huntington’s Disease,<br>Sickle Cell Disease or Familial Adenomatous Polyposis (FAP)?</label>
					<div class="input-group col-sm-4">
					<div class="btn-group btn-toggle" data-toggle="buttons">
						<label class="btn btn-mini btn-default" for="">
							{{Form::radio('family_history', 'Yes') }} Yes
						</label>
						<label class="btn btn-mini btn-info" for="">
							{{Form::radio('family_history', 'No', true) }} No
						</label>
					</div>
					</div>
				</div>
					{{ $errors->first('family_history', '<span class="help-block">:message</span>') }}
				</div>

				<div class="others_insured_extra">

					<div class="form-group">
						{{ Form::label('others_insured_remarks', 'If Yes, use Remarks Section:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('others_insured_remarks', Input::old('others_insured_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'others_insured_remarks', 'name' => 'others_insured_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('others_insured_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

If Yes, give details.




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
			$('.others_insured_extra').hide();
			$('.').hide();


			$( "#others_insured" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.').slideDown(900);

				} else {

					$('.').slideUp(900);

				}
			});

			$( "#business_credit_history" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.').slideDown(900);

				} else {

					$('.').slideUp(900);

				}
			});

		});	

	</script>

@stop