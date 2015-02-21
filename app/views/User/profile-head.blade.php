<div class="inner-section">
	<div class="container ">
	
	
		@if (!empty($user->address) && !empty($user->city) && !empty($user->state) && !empty($user->zip))

			<h4>Please verify your information:</h4>
			<address>
				<strong>
				{{{ $user->first_name }}} {{{ $user->middle_name }}} {{{ $user->last_name }}} ({{{ $user->maiden_name }}})<br>
				{{{ $user->address }}}<br>
				{{{ $user->address2 }}}<br>
				{{{ $user->city }}}, {{{ $user->state }}} {{{ $user->zip }}}<br>
				</strong>
			</address>
		
		@endif

			<!-- Verify applicants address -->
			<div class="form-group">
			<div class="controls">
				<label class="control-label" for="verify-address">Is this your home address?</label>
				<div class="input-group col-sm-4 input-group-2">
				<div class="btn-group" id="verify-address">
					<label class="btn-verify-address btn btn-mini btn-info" id="address-confirm-yes" for="">
						{{Form::radio('verify-address', 'yes') }} Yes
					</label>
						<label class="btn-verify-address btn btn-mini btn-default" id="address-confirm-no" for="">
						{{Form::radio('verify-address', 'no') }} No
					</label>
				</div>
				</div>
			</div>
			</div>
			<!-- if address needs updating, dispaly address fields -->
			<!-- Address -->

		<div class="container">
				{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'put', 'files' => true)) }}
			<div id="verify-address-block">
				<div class="form-group">
					{{ Form::label('address', 'Address:', array('class' => 'control-label')) }}
					<div class="input-group col-sm-6">
						{{ Form::text('address', Input::old('address'), array('class' => "form-control", 'placeholder' => 'Home Address', 'id' => "address", 'name' => "address")) }}
					</div>
					{{ $errors->first('address', '<span class="help-block">:message</span>') }}
				</div>
				<!-- Address 2 -->
				<div class="form-group">
					{{ Form::label('address2', 'Address:', array('class' => 'control-label')) }}
					<div class="input-group col-sm-6">
						{{ Form::text('address2', Input::old('address2'), array('class' => "form-control", 'placeholder' => 'Apt, Unit, Etc.', 'id' => "address2", 'name' => "address2")) }}
					</div>

					{{ $errors->first('address2', '<span class="help-block">:message</span>') }}
				</div>
				<!-- City -->
				<div class="form-group">
					{{ Form::label('city', 'City:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-6">
							{{ Form::text('city', Input::old('city'), array('class' => "form-control", 'placeholder' => 'City', 'id' => "city", 'name' => "city")) }}
						</div>
					</div>
					{{ $errors->first('city', '<span class="help-block">:message</span>') }}
				</div>
				<!-- State -->
				<div class="form-group">
					{{ Form::label('state', 'State:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-6">
							{{ Form::text('state', Input::old('state'), array('class' => "form-control", 'placeholder' => 'State', 'id' => "state", 'name' => "state")) }}
						</div>
					</div>
					{{ $errors->first('state', '<span class="help-block">:message</span>') }}
				</div>
				<!-- Zip -->
				<div class="form-group">
					{{ Form::label('zip', 'Zip:', array('class' => 'control-label')) }}
					<div class="controls">
						<div class="input-group col-sm-6">
							{{ Form::text('zip', Input::old('zip'), array('class' => "form-control", 'placeholder' => '12345', 'id' => "zip", 'name' => "zip")) }}
						</div>
					</div>
					{{ $errors->first('zip', '<span class="help-block">:message</span>') }}
				</div>

			</div><!-- end verify-address-block -->
		</div>
	</div>
</div>

