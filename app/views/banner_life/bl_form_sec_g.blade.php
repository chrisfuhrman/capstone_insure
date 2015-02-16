@extends('layouts.master')

@section('content')

<!-- SECTION G OTHER INSURANCE -->

<h1>OTHER INSURANCE</h1>

<div class="row">
	<div class="col-lg-12">
		<div class="box">


<!-- 30.a. Excluding this application, amount of insurance currently pending with other companies. If NONE state NONE. $  -->

			<div class="form-group">
				{{ HTML::decode(Form::label('pending_insurance', 'Excluding this application, amount of insurance currently pending with<br>other companies. If NONE state NONE. $:', array('class' => 'control-label'))) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('pending_insurance', Input::old('pending_insurance'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount (if NONE state NONE)', 'id' => 'pending_insurance', 'name' => 'pending_insurance')) }}
					</div>
				</div>
				{{ $errors->first('pending_insurance', '<span class="help-block">:message</span>') }}
			</div>

<!-- b. Of the above pending amount in 30.a., how much do you intend to accept? $  -->

			<div class="form-group">
				{{ Form::label('intend_to_accept', 'Of the above pending amount, how much do you intend to accept? $:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('intend_to_accept', Input::old('intend_to_accept'), array('class' => 'form-control', 'placeholder' => 'Dollar Amount', 'id' => 'intend_to_accept', 'name' => 'intend_to_accept')) }}
					</div>
				</div>
				{{ $errors->first('intend_to_accept', '<span class="help-block">:message</span>') }}
			</div>

<!-- c. Provide information for each policy in force (except group insurance). If NONE state NONE. -->

			<div class="form-group">
				{{ Form::label('policy_in_force', 'Provide information for each policy in force (except group insurance). If NONE state NONE.:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('policy_in_force', Input::old('policy_in_force'), array('class' => 'form-control', 'placeholder' => 'Information', 'id' => 'policy_in_force', 'name' => 'policy_in_force')) }}
					</div>
				</div>
				{{ $errors->first('policy_in_force', '<span class="help-block">:message</span>') }}
			</div>

			<div class="form-group">
				<div>
					{{ Form::label('policy_in_force_extra_space', 'If you need more space, Check Box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('policy_in_force_extra_space', 'yes', null, array('class' => 'form-control', 'id' => 'policy_in_force_extra_space', 'name' => 'policy_in_force_extra_space')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('policy_in_force_extra_space', '<span class="help-block">:message</span>') }}
			</div>

<!-- (If necessary, use Remarks section, Question 48.) -->

			<div class="policy_in_force_extra_remarks">

				<div class="form-group">
					{{ Form::label('policy_in_force_remarks', 'Additional Remarks:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('policy_in_force_remarks', Input::old('policy_in_force_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'policy_in_force_remarks', 'name' => 'policy_in_force_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('policy_in_force_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>

<!-- Company  -->

			<div class="form-group">
				{{ Form::label('other_insurance_company', 'Company:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_company', Input::old('other_insurance_company'), array('class' => 'form-control', 'placeholder' => 'Company', 'id' => 'other_insurance_company', 'name' => 'other_insurance_company')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_company', '<span class="help-block">:message</span>') }}
			</div>

<!-- Policy Number  -->

			<div class="form-group">
				{{ Form::label('other_insurance_policy_number', 'Policy Number:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_policy_number', Input::old('other_insurance_policy_number'), array('class' => 'form-control', 'placeholder' => 'Policy Number', 'id' => 'other_insurance_policy_number', 'name' => 'other_insurance_policy_number')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_policy_number', '<span class="help-block">:message</span>') }}
			</div>

<!-- Face Amount -->

			<div class="form-group">
				{{ Form::label('other_insurance_face_amount', 'Face Amount:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_face_amount', Input::old('other_insurance_face_amount'), array('class' => 'form-control', 'placeholder' => 'Face Amount', 'id' => 'other_insurance_face_amount', 'name' => 'other_insurance_face_amount')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_face_amount', '<span class="help-block">:message</span>') }}
			</div>

<!-- Business? 
Yes No --> 

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_business', 'If Business, Check Box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_business', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_business', 'name' => 'other_insurance_business')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_business', '<span class="help-block">:message</span>') }}
			</div>

<!-- Issue Date  -->

			<div class="form-group">
				{{ Form::label('other_insurance_issue_date', 'Issue Date:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_issue_date', Input::old('other_insurance_issue_date'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'other_insurance_issue_date')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_issue_date', '<span class="help-block">:message</span>') }}
			</div>

<!-- Replacing?
Yes No  -->

			<div class="form-group">
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_replacing', 'If you are Replacing this Policy, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_replacing', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_replacing', 'name' => 'other_insurance_replacing')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_replacing', '<span class="help-block">:message</span>') }}
			</div>

<!-- Beneficiary -->

			<div class="form-group">
				{{ Form::label('other_insurance_beneficiary', 'Beneficiary Name:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_beneficiary', Input::old('other_insurance_beneficiary'), array('class' => 'form-control', 'placeholder' => 'Beneficiary Name', 'id' => 'other_insurance_beneficiary', 'name' => 'other_insurance_beneficiary')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_beneficiary', '<span class="help-block">:message</span>') }}
			</div>



<!-- Company 2 -->

			<div class="form-group">
				{{ Form::label('other_insurance_company', 'Company:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_company', Input::old('other_insurance_company'), array('class' => 'form-control', 'placeholder' => 'Company', 'id' => 'other_insurance_company', 'name' => 'other_insurance_company')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_company', '<span class="help-block">:message</span>') }}
			</div>

<!-- Policy Number 2 -->

			<div class="form-group">
				{{ Form::label('other_insurance_policy_number', 'Policy Number:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_policy_number', Input::old('other_insurance_policy_number'), array('class' => 'form-control', 'placeholder' => 'Policy Number', 'id' => 'other_insurance_policy_number', 'name' => 'other_insurance_policy_number')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_policy_number', '<span class="help-block">:message</span>') }}
			</div>

<!-- Face Amount 2 -->

			<div class="form-group">
				{{ Form::label('other_insurance_face_amount', 'Face Amount:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_face_amount', Input::old('other_insurance_face_amount'), array('class' => 'form-control', 'placeholder' => 'Face Amount', 'id' => 'other_insurance_face_amount', 'name' => 'other_insurance_face_amount')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_face_amount', '<span class="help-block">:message</span>') }}
			</div>

<!-- Business? 
Yes No 2 --> 

			<div class="form-group">
				<div>
				{{ Form::label('other_insurance_business', 'If Business, Check Box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_business', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_business', 'name' => 'other_insurance_business')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_business', '<span class="help-block">:message</span>') }}
			</div>

<!-- Issue Date 2 -->

			<div class="form-group">
				{{ Form::label('other_insurance_issue_date', 'Issue Date:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_issue_date', Input::old('other_insurance_issue_date'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'other_insurance_issue_date')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_issue_date', '<span class="help-block">:message</span>') }}
			</div>

<!-- Replacing?
Yes No 2 -->

			<div class="form-group">
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_replacing', 'If you are Replacing this Policy, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_replacing', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_replacing', 'name' => 'other_insurance_replacing')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_replacing', '<span class="help-block">:message</span>') }}
			</div>

<!-- Beneficiary 2 -->

			<div class="form-group">
				{{ Form::label('other_insurance_beneficiary', 'Beneficiary Name:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						{{ Form::text('other_insurance_beneficiary', Input::old('other_insurance_beneficiary'), array('class' => 'form-control', 'placeholder' => 'Beneficiary Name', 'id' => 'other_insurance_beneficiary', 'name' => 'other_insurance_beneficiary')) }}
					</div>
				</div>
				{{ $errors->first('other_insurance_beneficiary', '<span class="help-block">:message</span>') }}
			</div>

<!-- More space needed? -->

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_more_fields', 'If you need more fields, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_more_fields', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_more_fields', 'name' => 'other_insurance_more_fields')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_more_fields', '<span class="help-block">:message</span>') }}
			</div>


			<div class="policy_in_force_extra_fields">

<!-- Company 3 -->

				<div class="form-group">
					{{ Form::label('other_insurance_company3', 'Company:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_company3', Input::old('other_insurance_company3'), array('class' => 'form-control', 'placeholder' => 'Company', 'id' => 'other_insurance_company3', 'name' => 'other_insurance_company3')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_company3', '<span class="help-block">:message</span>') }}
				</div>

<!-- Policy Number 3 -->

				<div class="form-group">
					{{ Form::label('other_insurance_policy_number3', 'Policy Number:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_policy_number3', Input::old('other_insurance_policy_number3'), array('class' => 'form-control', 'placeholder' => 'Policy Number', 'id' => 'other_insurance_policy_number3', 'name' => 'other_insurance_policy_number3')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_policy_number3', '<span class="help-block">:message</span>') }}
				</div>

<!-- Face Amount 3 -->

				<div class="form-group">
					{{ Form::label('other_insurance_face_amount3', 'Face Amount:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_face_amount3', Input::old('other_insurance_face_amount3'), array('class' => 'form-control', 'placeholder' => 'Face Amount', 'id' => 'other_insurance_face_amount3', 'name' => 'other_insurance_face_amount3')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_face_amount3', '<span class="help-block">:message</span>') }}
				</div>

<!-- Business? 
Yes No 3 -->

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_business3', 'If Business, Check Box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_business3', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_business3', 'name' => 'other_insurance_business3')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_business3', '<span class="help-block">:message</span>') }}
			</div>

<!-- Issue Date 3 -->

				<div class="form-group">
					{{ Form::label('other_insurance_issue_date3', 'Issue Date:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_issue_date3', Input::old('other_insurance_issue_date3'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date3', 'name' => 'other_insurance_issue_date3')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_issue_date3', '<span class="help-block">:message</span>') }}
				</div>

<!-- Replacing?
Yes No 3 -->

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_replacing3', 'If you are Replacing this Policy, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_replacing3', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_replacing3', 'name' => 'other_insurance_replacing3')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_replacing3', '<span class="help-block">:message</span>') }}
			</div>

<!-- Beneficiary 3 -->

				<div class="form-group">
					{{ Form::label('other_insurance_beneficiary3', 'Beneficiary Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_beneficiary3', Input::old('other_insurance_beneficiary3'), array('class' => 'form-control', 'placeholder' => 'Beneficiary Name', 'id' => 'other_insurance_beneficiary3', 'name' => 'other_insurance_beneficiary3')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_beneficiary3', '<span class="help-block">:message</span>') }}
				</div>



<!-- Company 4 -->

				<div class="form-group">
					{{ Form::label('other_insurance_company4', 'Company:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_company4', Input::old('other_insurance_company4'), array('class' => 'form-control', 'placeholder' => 'Company', 'id' => 'other_insurance_company4', 'name' => 'other_insurance_company4')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_company4', '<span class="help-block">:message</span>') }}
				</div>

<!-- Policy Number 4 -->

				<div class="form-group">
					{{ Form::label('other_insurance_policy_number4', 'Policy Number:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_policy_number4', Input::old('other_insurance_policy_number4'), array('class' => 'form-control', 'placeholder' => 'Policy Number', 'id' => 'other_insurance_policy_number4', 'name' => 'other_insurance_policy_number4')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_policy_number4', '<span class="help-block">:message</span>') }}
				</div>

<!-- Face Amount 4 -->

				<div class="form-group">
					{{ Form::label('other_insurance_face_amount4', 'Face Amount:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_face_amount4', Input::old('other_insurance_face_amount4'), array('class' => 'form-control', 'placeholder' => 'Face Amount', 'id' => 'other_insurance_face_amount4', 'name' => 'other_insurance_face_amount4')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_face_amount4', '<span class="help-block">:message</span>') }}
				</div>

<!-- Business? 
Yes No 4 --> 

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_business4', 'If Business, Check Box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_business4', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_business4', 'name' => 'other_insurance_business4')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_business4', '<span class="help-block">:message</span>') }}
			</div>

<!-- Issue Date 4 -->

				<div class="form-group">
					{{ Form::label('other_insurance_issue_date4', 'Issue Date:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_issue_date4', Input::old('other_insurance_issue_date4'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date4', 'name' => 'other_insurance_issue_date4')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_issue_date4', '<span class="help-block">:message</span>') }}
				</div>

<!-- Replacing?
Yes No 4 -->

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_replacing4', 'If you are Replacing this Policy, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_replacing4', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_replacing4', 'name' => 'other_insurance_replacing4')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_replacing4', '<span class="help-block">:message</span>') }}
			</div>

<!-- Beneficiary 4 -->

				<div class="form-group">
					{{ Form::label('other_insurance_beneficiary4', 'Beneficiary Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_beneficiary4', Input::old('other_insurance_beneficiary4'), array('class' => 'form-control', 'placeholder' => 'Beneficiary Name', 'id' => 'other_insurance_beneficiary4', 'name' => 'other_insurance_beneficiary4')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_beneficiary4', '<span class="help-block">:message</span>') }}
				</div>

<!-- Company 5 -->

				<div class="form-group">
					{{ Form::label('other_insurance_company5', 'Company:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_company5', Input::old('other_insurance_company5'), array('class' => 'form-control', 'placeholder' => 'Company', 'id' => 'other_insurance_company5', 'name' => 'other_insurance_company5')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_company5', '<span class="help-block">:message</span>') }}
				</div>

<!-- Policy Number 5 -->

				<div class="form-group">
					{{ Form::label('other_insurance_policy_number5', 'Policy Number:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_policy_number5', Input::old('other_insurance_policy_number5'), array('class' => 'form-control', 'placeholder' => 'Policy Number', 'id' => 'other_insurance_policy_number5', 'name' => 'other_insurance_policy_number5')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_policy_number5', '<span class="help-block">:message</span>') }}
				</div>

<!-- Face Amount 5 -->

				<div class="form-group">
					{{ Form::label('other_insurance_face_amount5', 'Face Amount:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_face_amount5', Input::old('other_insurance_face_amount5'), array('class' => 'form-control', 'placeholder' => 'Face Amount', 'id' => 'other_insurance_face_amount5', 'name' => 'other_insurance_face_amount5')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_face_amount5', '<span class="help-block">:message</span>') }}
				</div>

<!-- Business? 
Yes No 5 --> 

			<div class="form-group">
				<div>
					{{ Form::label('other_insurance_business5', 'If Business, Check Box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_business5', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_business5', 'name' => 'other_insurance_business5')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_business5', '<span class="help-block">:message</span>') }}
			</div>

<!-- Issue Date 5 -->

				<div class="form-group">
					{{ Form::label('other_insurance_issue_date5', 'Issue Date:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_issue_date5', Input::old('other_insurance_issue_date5'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date5', 'name' => 'other_insurance_issue_date5')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_issue_date5', '<span class="help-block">:message</span>') }}
				</div>

<!-- Replacing?
Yes No 5 -->

				<div class="form-group">
				<div>
					{{ Form::label('other_insurance_replacing5', 'If you are Replacing this Policy, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_replacing5', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_replacing5', 'name' => 'other_insurance_replacing5')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_replacing5', '<span class="help-block">:message</span>') }}
			</div>

<!-- Beneficiary 5 -->

				<div class="form-group">
					{{ Form::label('other_insurance_beneficiary5', 'Beneficiary Name:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::text('other_insurance_beneficiary5', Input::old('other_insurance_beneficiary5'), array('class' => 'form-control', 'placeholder' => 'Beneficiary Name', 'id' => 'other_insurance_beneficiary5', 'name' => 'other_insurance_beneficiary5')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_beneficiary5', '<span class="help-block">:message</span>') }}
				</div>

<!-- Still more space needed? -->

				<div class="form-group">
				<div>
					{{ Form::label('other_insurance_additional', 'If you are Replacing this Policy, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('other_insurance_additional', 'yes', null, array('class' => 'form-control', 'id' => 'other_insurance_additional', 'name' => 'other_insurance_additional')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('other_insurance_additional', '<span class="help-block">:message</span>') }}
			</div>

				<div class="other_insurance_extra">
					
					<div class="form-group">
						{{ Form::label('other_insurance_remarks', 'Additional Remarks:', array('class' => 'control-label')) }}
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-male"></i></span>
								{{ Form::textarea('other_insurance_remarks', Input::old('other_insurance_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'other_insurance_remarks', 'name' => 'other_insurance_remarks', 'rows' => '5')) }}
							</div>
						</div>
						{{ $errors->first('other_insurance_remarks', '<span class="help-block">:message</span>') }}
					</div>

				</div>

			</div>

<!-- 31. Have you ever had an application for life or health insurance declined, postponed, modified, rated or offered with
a reduced face amount? 
  -->

			<div class="form-group">
				<div>
				{{ HTML::decode(Form::label('application_issues', 'If you have ever had an application for life or health insurance declined, postponed,<br>modified, rated or offered with a reduced face amount, Check box:', array('class' => 'control-label'))) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('application_issues', 'yes', null, array('class' => 'form-control', 'id' => 'application_issues', 'name' => 'application_issues')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('application_issues', '<span class="help-block">:message</span>') }}
			</div>

<!-- (If Yes, provide details in Remarks section, Question 48.) -->

			<div class="application_extra">

				<div class="form-group">
					{{ Form::label('application_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('application_remarks', Input::old('application_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'application_remarks', 'name' => 'application_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('application_remarks', '<span class="help-block">:message</span>') }}
				</div>

			</div>	

<!-- 32. Will you, or are you likely to, replace, end, or change existing insurance or annuity with any company or society
with the insurance for which you are applying? 
  -->

			<div class="form-group">
				<div>
				{{ Form::label('updating_existing_insurance', 'If you are, or are you likely to, replace, end, or change existing insurance or annuity with any company or society with the insurance for which you are applying, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
						{{ Form::checkbox('updating_existing_insurance', 'yes', null, array('class' => 'form-control', 'id' => 'updating_existing_insurance', 'name' => 'updating_existing_insurance')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('updating_existing_insurance', '<span class="help-block">:message</span>') }}
			</div>

<p>(If Yes, the broker may be required to provide additional forms for your review and signature.)</p>


<!-- 33. Are there any plans to sell or permanently assign the policy to another person or entity, life settlement provider or
an investor, or will it replace a policy that has already been sold to another life settlement company or investor?
  -->

			<div class="form-group">
				<div>
					{{ Form::label('change_ownership_of_policy', 'If there are any plans to sell or permanently assign the policy to another person or entity, life settlement provider or an investor, or if it will replace a policy that has already been sold to another life settlement company or investor, Check box:', array('class' => 'control-label')) }}
				</div>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-male"></i></span>
						<label class="switch">
							{{ Form::checkbox('change_ownership_of_policy', 'yes', null, array('class' => 'form-control', 'id' => 'change_ownership_of_policy', 'name' => 'change_ownership_of_policy')) }}
						    <span class="switch-label" data-on="Yes" data-off="No"></span>
						    <span class="switch-handle"></span>
					    </label>
					</div>
				</div>
				{{ $errors->first('change_ownership_of_policy', '<span class="help-block">:message</span>') }}
			</div>

<!-- (If Yes, provide details in Remarks section, Question 48.) -->

			<div class="change_ownership_extra">

				<div class="form-group">
					{{ Form::label('other_insurance_remarks', 'If yes, provide details in Remarks Section:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							{{ Form::textarea('other_insurance_remarks', Input::old('other_insurance_remarks'), array('class' => 'form-control', 'placeholder' => 'Remarks', 'id' => 'other_insurance_remarks', 'name' => 'other_insurance_remarks', 'rows' => '5')) }}
						</div>
					</div>
					{{ $errors->first('other_insurance_remarks', '<span class="help-block">:message</span>') }}
				</div>
			</div>	
		
		</div>
	</div>
</div>

<nav>
	<ul class="pager">
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecF') }}}">Previous</a></li>
		<li><a href="{{{ action('PolicyAppController@showLifeAppSecH') }}}">Next</a></li>
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
			$('.other_insurance_extra').hide();
			$('.policy_in_force_extra_fields').hide();
			$('.policy_in_force_extra_remarks').hide();
			$('.change_ownership_extra').hide();
			$('.application_extra').hide();

			$( "#other_insurance_additional" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.other_insurance_extra').slideDown(900);

				} else {

					$('.other_insurance_extra').slideUp(900);

				}
			});

			$( "#other_insurance_more_fields" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.policy_in_force_extra_fields').slideDown(900);

				} else {

					$('.policy_in_force_extra_fields').slideUp(900);

				}
			});

			$( "#policy_in_force_extra_space" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.policy_in_force_extra_remarks').slideDown(900);

				} else {

					$('.policy_in_force_extra_remarks').slideUp(900);

				}
			});

			$( "#application_issues" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.application_extra').slideDown(900);

				} else {

					$('.application_extra').slideUp(900);

				}
			});

			$( "#change_ownership_of_policy" ).on('click', function(){
				var value = $(this).prop( 'checked' );

				if (value == true){

					$('.change_ownership_extra').slideDown(900);

				} else {

					$('.change_ownership_extra').slideUp(900);

				}
			});

		});	

	</script>

@stop