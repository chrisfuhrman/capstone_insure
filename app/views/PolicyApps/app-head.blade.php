<div class="col-md-11 pull-left" id="inner-section">

	<div class="section-heading">
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



</div>

