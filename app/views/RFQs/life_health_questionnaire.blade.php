@extends('layouts.master')

@section('content')
<!-- SECTION: Health Questionnaire -->
<div class="quote-section">
	<div class="container">

<div class="container">
<div id="content" class="col-lg-10 col-sm-11">
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
			<h2 id="quote-header">Please fill out this brief health survey to receive the most accurate life insurance estimate</h2>
			</div>

		<form class="form-horizontal">

			<ol>
				<!-- Question # 1 -->
				<li>Is your cholesterol above 40000?</li>
				<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
							<div class="btn-group btn-toggle"> 
				            	<input type="submit" class="btn btn-sm btn-default" name="q1_yes" value="Yes">
				            	<input type="submit" class="btn btn-sm btn-primary active" name="q1_no" value="No">
		    					<!-- <button class="btn btn-sm btn-default">Yes</button> -->
		    					<!-- <button class="btn btn-sm btn-primary active">No</button> -->
							</div>
						</div>
					</div>
				</div>

				<!-- Question # 2 -->
				<li>Is your cholesterol above 40000?</li>
				<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
							<div class="btn-group btn-toggle"> 
				            	<input type="submit" class="btn btn-sm btn-default" name="q1_yes" value="Yes">
				            	<input type="submit" class="btn btn-sm btn-primary active" name="q1_no" value="No">
		    					<!-- <button class="btn btn-sm btn-default">Yes</button> -->
		    					<!-- <button class="btn btn-sm btn-primary active">No</button> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Question # 3 -->
				<li>Is your cholesterol above 40000?</li>
				<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
							<div class="btn-group btn-toggle"> 
				            	<input type="submit" class="btn btn-sm btn-default" name="q1_yes" value="Yes">
				            	<input type="submit" class="btn btn-sm btn-primary active" name="q1_no" value="No">
		    					<!-- <button class="btn btn-sm btn-default">Yes</button> -->
		    					<!-- <button class="btn btn-sm btn-primary active">No</button> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Question # 4 -->
				<li>Is your cholesterol above 40000?</li>
				<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
							<div class="btn-group btn-toggle"> 
				            	<input type="submit" class="btn btn-sm btn-default" name="q1_yes" value="Yes">
				            	<input type="submit" class="btn btn-sm btn-primary active" name="q1_no" value="No">
		    					<!-- <button class="btn btn-sm btn-default">Yes</button> -->
		    					<!-- <button class="btn btn-sm btn-primary active">No</button> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Question # 5 -->
				<li>Is your cholesterol above 40000?</li>
				<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
							<div class="btn-group btn-toggle"> 
				            	<input type="submit" class="btn btn-sm btn-default" name="q1_yes" value="Yes">
				            	<input type="submit" class="btn btn-sm btn-primary active" name="q1_no" value="No">
		    					<!-- <button class="btn btn-sm btn-default">Yes</button> -->
		    					<!-- <button class="btn btn-sm btn-primary active">No</button> -->
							</div>
						</div>
					</div>
				</div>
			</ol>

			<div class="form-actions">
				<a href="{{{ route('lifeRFQResults') }}}" type="submit" class="btn btn-primary">Submit</a>
			</div>
			<div>
				<h3>Or</h3>
				<h3>choose your health classification manually</h3>
			</div>


			<div class="form-group">
				<label class="control-label" for="health classification">Health</label>
				<div class="controls">
					<div class="input-group col-sm-4">
						<span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
						<select class="form-control input-tag" id="input-health">
							<option disabled selected></option>
							<option>Preferred + (Excellent)</option>
							<option>Preferred</option>
							<option>Standard Plus</option>
							<option>Standard</option>
						</select>							
					</div>
				</div>
			</div>	
									
			<div class="form-actions">
				<a href="{{{ route('lifeRFQResults') }}}" type="submit" class="btn btn-primary">Submit</a>
			</div>
		</form>   
			</div>
		</div>
	</div><!--/col-->

</div><!--/row-->		
</div><!-- end: Content -->
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

		$('form').submit(function(){
			// alert($(this["options"]).val());
		    return false;
		});
	</script>




@stop
