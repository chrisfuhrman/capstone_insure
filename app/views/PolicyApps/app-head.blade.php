
<div class="inner-section">

	<div class="section-heading">
		<h2>Proposed Insured Information</h2>
	</div>

	<div class="container clipboard-container">
		<div class="container inner-clipboard">
			<h4 class="">Please verify your information:</h4>
			<address>
				<strong>
				{{{ $usersPolicy->first_name . ' ' . $user->middle_name . ' '
					 . $user->last_name . ' ' . '(' . $user->maiden_name . ')' }}}<br>
				{{{ $user->address }}}<br>
				{{{ $user->address2 }}}<br>
				{{{ $user->city }}}, {{{ $user->state }}} {{{ $user->zip }}}<br>
				</strong>
			</address>
			<!-- Verify applicants address -->
			<div class="form-group">
			<label class="control-label" for="gender">Is this your home address?</label>

				<div class="input-group col-sm-4 input-group-2">
				<div class="btn-group">
					<label id="address-confirm-yes" class="btn-chol btn btn-mini btn-default" for="">
						{{Form::radio('correct_address', 'yes') }} Yes
					</label>
						<label id="address-confirm-no" class="btn-chol btn btn-mini btn-info" for="">
						{{Form::radio('correct_address', 'no', true) }} No
					</label>
				</div>
				</div>
			</div>
			<!-- if address needs updating, dispaly address fields -->
			<!-- Address -->
			<div class="form-group">
				{{ Form::label('address', 'Address:', array('class' => 'control-label')) }}
				<div class="input-group col-sm-4">
					{{ Form::text('address', Input::old('address'), array('class' => "form-control", 'placeholder' => 'Home Address', 'id' => "address", 'name' => "address")) }}
				</div>
				{{ $errors->first('address', '<span class="help-block">:message</span>') }}
			</div>
			<!-- Address 2 -->
			<div class="form-group">
				{{ Form::label('address2', 'Address:', array('class' => 'control-label')) }}
				<div class="input-group col-sm-4">
					{{ Form::text('address2', Input::old('address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "address2", 'name' => "address2")) }}
				</div>

				{{ $errors->first('address2', '<span class="help-block">:message</span>') }}
			</div>
			<!-- City -->
			<div class="form-group">
				{{ Form::label('city', 'City:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						{{ Form::text('city', Input::old('city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "city", 'name' => "city")) }}
					</div>
				</div>
				{{ $errors->first('city', '<span class="help-block">:message</span>') }}
			</div>
			<!-- State -->
			<div class="form-group">
				{{ Form::label('state', 'State:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						{{ Form::text('state', Input::old('state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "state", 'name' => "state")) }}
					</div>
				</div>
				{{ $errors->first('state', '<span class="help-block">:message</span>') }}
			</div>
			<!-- Zip -->
			<div class="form-group">
				{{ Form::label('zip', 'Zip:', array('class' => 'control-label')) }}
				<div class="controls">
					<div class="input-group col-sm-4">
						{{ Form::text('zip', Input::old('zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "zip", 'name' => "zip")) }}
					</div>
				</div>
				{{ $errors->first('zip', '<span class="help-block">:message</span>') }}
			</div>

		</div><!-- end container inner-clipboard-->
	</div><!-- end container clipboard-container-->
</div>


