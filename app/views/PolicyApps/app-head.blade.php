<div class="inner-section">
<div class="box">

	<div class="section-heading ">
		<h2>Proposed Insured Information</h2>
	</div>

	<h4>Please verify your information:</h4>
	<address>
		<strong>
		{{{ $user->first_name . $user->middle_name . $user->last_name . "($user->maiden_name)" }}}
		{{{ $user->address }}}<br>
		{{{ $user->address2 }}}<br>
		{{{ $user->city }}}, {{{ $user->state }}} {{{ $user->zip }}}<br></strong>
	</address>
	<!-- Verify applicants address -->
	<li>Is this your home address?</li>
	<div class="form-group">
	<div class="controls">
		<label class="control-label" for=""></label>
		<div class="input-group col-sm-4 input-group-2">
		<div class="btn-group btn-toggle" data-toggle="buttons">
			<label class="btn btn-mini btn-default" for="">
				{{Form::radio('correct_address', 'yes') }} Yes
			</label>
			<label class="btn btn-mini btn-info" for="">
				{{Form::radio('correct_address', 'no', true) }} No
			</label>
		</div>
		</div>
	</div>
	</div>
	<!-- if address needs updating, dispaly address fields -->

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











</div>
</div>


