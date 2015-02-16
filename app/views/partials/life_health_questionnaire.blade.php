<ol>
	<!-- Question # 1 -->
	<li>Do you smoke?</li>
	<div class="form-group">
	<div class="controls">
		<label class="control-label" for="smoking status"></label>
		<div class="input-group col-sm-4">
		<div class="btn-group btn-toggle" data-toggle="buttons">
			<label class="btn btn-mini btn-default" for="">
				{{Form::radio('smoker', 'yes') }} Yes
			</label>
			<label class="btn btn-mini btn-info" for="">
				{{Form::radio('smoker', 'no', true) }} No
			</label>
		</div>
		</div>
	</div>
	</div>
	<!-- Question # 2 -->
	<li>Have you ever consulted a medical professional, been diagnosed or treated for <strong>high Cholesterol</strong>?</li>
	<div class="form-group">
	<div class="controls">
		<label class="control-label" for="cholesterol question"></label>
		<div class="input-group col-sm-4">
		<div class="btn-group btn-toggle" data-toggle="buttons">
			<label class="btn btn-mini btn-default" for="">
				{{Form::radio('cholesterol', 'yes') }} Yes
			</label>
				<label class="btn btn-mini btn-info" for="">
				{{Form::radio('cholesterol', 'no', true) }} No
			</label>
		</div>
		</div>
	</div>
	</div>
	<!-- Question # 3 -->
	<li>Have you ever consulted a medical professional, been diagnosed or treated for <strong>high blood pressure</strong>?</li>
	<div class="form-group">
	<div class="controls">
		<label class="control-label" for="blood pressure question"></label>
		<div class="input-group col-sm-4">
		<div class="btn-group btn-toggle" data-toggle="buttons">
			<label class="btn btn-mini btn-default" for="">
				{{Form::radio('blood_pressure', 'yes') }} Yes
			</label>
				<label class="btn btn-mini btn-info" for="">
				{{Form::radio('blood_pressure', 'no', true) }} No
			</label>
		</div>
		</div>
	</div>
	</div>
	<!-- Question # 4 -->
	<li>In the past five years, have you been diagnosed, treated for, or been advised to be treated for alcohol or drug dependence or abuse?</li>
	<div class="form-group">
	<div class="controls">
		<label class="control-label" for="drug and alcohol question"></label>
		<div class="input-group col-sm-4">
		<div class="btn-group btn-toggle" data-toggle="buttons">
			<label class="btn btn-mini btn-default" for="">
				{{Form::radio('drugs', 'yes') }} Yes
			</label>
				<label class="btn btn-mini btn-info" for="">
				{{Form::radio('drugs', 'no', true) }} No
			</label>
		</div>
		</div>
	</div>
	</div>
</ol>


