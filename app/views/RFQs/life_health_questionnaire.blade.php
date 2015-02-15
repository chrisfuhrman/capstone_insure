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
				<h5>We are about to ask you a few health questions in order to provie you with the most accurate quote that we can.  Insurance companies will do a full medical review if you decide to submit an application for life insurance (so please don't hide anything on your record).  This is standard practice when applying for the most competively priced insurance policies.</h5>
			</div>

<!-- 'class' => 'form-horizontal' -->
			{{ Form::open(['action' => 'LifeResultsController@index']) }}

				<ol>
					<!-- Question # 1 -->
					<li>Do you smoke?</li>
					<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
	    				<div class="btn-group btn-toggle" data-toggle="buttons">
							<label class="btn btn-mini btn-default" for="">
								{{Form::radio('q1', 'yes') }} Yes
							</label>
		  					<label class="btn btn-mini btn-info" for="">
	  							{{Form::radio('q1', 'no') }} No
							</label>
						</div>
						</div>
					</div>
					</div>
					<!-- Question # 2 -->
					<li>Have you ever consulted a medical professional, been diagnosed or treated for <strong>high Cholesterol</strong>?</li>
					<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
	    				<div class="btn-group btn-toggle" data-toggle="buttons">
							<label class="btn btn-mini btn-default" for="">
								{{Form::radio('q2', 'yes') }} Yes
							</label>
		  					<label class="btn btn-mini btn-info" for="">
	  							{{Form::radio('q2', 'no') }} No
							</label>
						</div>
						</div>
					</div>
					</div>
					<!-- Question # 3 -->
					<li>Have you ever consulted a medical professional, been diagnosed or treated for <strong>high blood pressure</strong>?</li>
					<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
	    				<div class="btn-group btn-toggle" data-toggle="buttons">
							<label class="btn btn-mini btn-default" for="">
								{{Form::radio('q3', 'yes') }} Yes
							</label>
		  					<label class="btn btn-mini btn-info" for="">
	  							{{Form::radio('q3', 'no') }} No
							</label>
						</div>
						</div>
					</div>
					</div>
					<!-- Question # 4 -->
					<li>In the past five years, have you been diagnosed, treated for, or been advised to be treated for alcohol or drug dependence or abuse?</li>
					<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
	    				<div class="btn-group btn-toggle" data-toggle="buttons">
							<label class="btn btn-mini btn-default" for="">
								{{Form::radio('q4', 'yes') }} Yes
							</label>
		  					<label class="btn btn-mini btn-info" for="">
	  							{{Form::radio('q4', 'no') }} No
							</label>
						</div>
						</div>
					</div>
					</div>
				</ol>
				
				{{Form::submit('Next', ['class' => 'btn btn-primary']) }}

			{{ Form::close() }}
		</div>
	</div><!--/col-->

</div><!--/row-->		
</div><!-- end: Content -->
</div><!-- end: container-->		


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
