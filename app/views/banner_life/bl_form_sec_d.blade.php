<!-- SECTION D TRUST INFORMATION (If trust is Beneficiary and/or Owner).
 -->

<!-- Exact Name of Trust   -->
<!-- Name   -->

	<div class="form-group">
		{{ Form::label('trust_name', 'Trust Name:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::text('trust_name', Input::old('trust_name'), array('class' => 'form-control', 'placeholder' => 'Trust Name', 'id' => 'trust_name', 'name' => 'trust_name')) }}
			</div>
		</div>
		{{ $errors->first('trust_name', '<span class="help-block">:message</span>') }}
	</div>


<!-- TIN -->
<!-- Trust Tax ID#  -->

	<div class="form-group">
		{{ Form::label('trust_id', 'Tax ID Number, or Social Security:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::text('trust_id', Input::old('trust_id'), array('class' => 'form-control', 'placeholder' => '99-9999999', 'id' => 'tin', 'name' => 'trust_id')) }}
			</div>
		</div>
		{{ $errors->first('trust_id', '<span class="help-block">:message</span>') }}
	</div>

<!-- Current Trustee(s)  -->

	<div class="form-group">
		{{ Form::label('trustee_name', 'trustee Name:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::text('trustee_name', Input::old('trustee_name'), array('class' => 'form-control', 'placeholder' => '1st Trustee Name', 'id' => 'trustee_name', 'name' => 'trustee_name')) }}
			</div>
		</div>
		{{ $errors->first('trustee_name', '<span class="help-block">:message</span>') }}
	</div>	

<!-- Current Trustee(s)  -->

	<div class="form-group">
		{{ Form::label('trustee_name2', 'First Name:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::text('trustee_name2', Input::old('trustee_name2'), array('class' => 'form-control', 'placeholder' => '2nd Trustee Name', 'id' => 'trustee_name2', 'name' => 'trustee_name2')) }}
			</div>
		</div>
		{{ $errors->first('trustee_name2', '<span class="help-block">:message</span>') }}
	</div>	

<!-- Current Trustee(s)  -->

	<div class="form-group">
		{{ Form::label('trustee_name3', 'First Name:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::text('trustee_name3', Input::old('trustee_name3'), array('class' => 'form-control', 'placeholder' => ' 3rd Trustee Name', 'id' => 'trustee_name3', 'name' => 'trustee_name3')) }}
			</div>
		</div>
		{{ $errors->first('trustee_name3', '<span class="help-block">:message</span>') }}
	</div>	

<!-- Date of Trust  -->

	<div class="form-group">
		{{ Form::label('date_of_trust', 'Date of Trust:', array('class' => 'control-label')) }}
		<div class="controls">
			<div class="input-group col-sm-4">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				{{ Form::text('date_of_trust', Input::old('date_of_trust'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'date_of_trust')) }}
			</div>
		</div>
		{{ $errors->first('date_of_trust', '<span class="help-block">:message</span>') }}
	</div>


