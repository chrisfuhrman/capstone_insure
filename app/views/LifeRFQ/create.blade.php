@extends('layouts.master')

@section('content')

<div class="quote-section">
	<div class="container">
		<div id="content" class="col-lg-10 col-sm-11">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<div class="box-header">
						<h2 id="quote-header" class="quote-header">Check out our simple and clear life insurance price comparison tool below:</h2>
						</div>

						<div class="box-content">
							<!-- <form class="form-horizontal"> -->
							{{ Form::open(['action' => 'LifeRFQController@store']) }}

							<div id="section-1">
								<!-- Name -->
								<div class="wrap">
								<div class="form-group">
									<label class="control-label" for="first name">First Name <span class="lastN">Last Name</span></label>
									<div class="controls">
										<div class="input-group col-sm-5">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="text" name="first_name" class="form-control">
											<span class="input-group-addon"></span>
											<input type="text" name="last_name" class="form-control">
										</div>
									</div>
								</div>		
								</div>
								<!-- zip -->
								<div class="form-group">
									<label class="control-label" for="zip code">Zip Code</label>
									<div class="controls">
										<div class="input-group col-sm-5">
											<span class="input-group-addon"><i class="fa fa-home"></i></span>
											<input type="text" placeholder= '12345'id="zip" name="zip" class="form-control">
										</div>
									</div>
								</div>
								<!-- Gender -->
								<div class="form-group">
								<div class="controls">
									<label class="control-label" for="gender">Gender</label>
									<div class="input-group col-sm-5">
									<div class="wrap">	
					    				<div class="btn-group btn-toggle" data-toggle="buttons">
											<span class="input-group-addon gender-icon"><i class="fa fa-user"></i></span>
											<label class="btn btn-mini btn-default" for="">
											<input type="radio" name="gender" value="male">Male</input>
											</label>
						  					<label class="btn btn-mini btn-info" for="">
											<input type="radio" name="gender" value="female" checked>Female</input>
											</label>
										</div>
									</div>
									</div>
								</div>
								</div>
								<!-- DOB -->
								<div class="form-group">
				            		{{ Form::label('dob', 'Date of Birth:', array('class' => 'control-label')) }}
					                <div class="controls">
					                    <div class="input-group col-sm-5">
					                        <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
					                    {{ Form::text('dob', Input::old('dob'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'dob')) }}
					                	</div>
					                </div>

					                {{ $errors->first('dob', '<span class="help-block">:message</span>') }}
				            	</div>
								<!-- Coverge Amount -->
								<div class="form-group">
									<label class="control-label" for="coverage amount">Coverage Amount</label>
									<div class="controls">
									<div class="input-group col-sm-5">
										<span class="input-group-addon"><i class="fa fa-usd"></i></span>
										<select name="coverage_amount" class="form-control selectpicker  input-tag">
											<option disabled selected> -- Amount of Coverage -- </option>
											<option value="100000">$100,000</option>
											<option value="150000">$150,000</option>
											<option value="200000">$200,000</option>
											<option value="250000">$250,000</option>
											<option value="300000">$300,000</option>
											<option value="350000">$350,000</option>
											<option value="400000">$400,000</option>
											<option value="450000">$450,000</option>
											<option value="500000">$500,000</option>
											<option value="550000">$550,000</option>
											<option value="600000">$600,000</option>
											<option value="650000">$650,000</option>
											<option value="700000">$700,000</option>
											<option value="750000">$750,000</option>
											<option value="850000">$850,000</option>
											<option value="900000">$900,000</option>
											<option value="1000000">$1,000,000</option>
											<option value="1250000">$1,250,000</option>
											<option value="1500000">$1,500,000</option>
											<option value="1750000">$1,750,000</option>
											<option value="2000000">$2,000,000</option>
										</select>
									</div>
									</div>
								</div>
								<!-- Length of Coverage -->
								<div class="form-group">
									<label class="control-label" for="duration">Length of Coverage</label>
									<div class="controls">
										<div class="input-group col-sm-5">
											<span class="input-group-addon"><i class="fa fa-tachometer"></i></span>
											<select name="coverage_duration" class="form-control selectpicker input-tag">
												<option disabled selected> -- Length of Coverage -- </option>
												<option value="10">10 Years</option>
												<option value="15">15 Years</option>
												<option value="20">20 Years</option>
												<option value="25">25 Years</option>
												<option value="30">30 Years</option>
												<option value="35">35 Years</option>
												<option value="40">40 Years</option>
											</select>
										</div>
									</div>
								</div>

							</div><!--  end section 1 -->

							<!-- section 2-->
							<div class="hide-this" id="section-2">
								@include('partials.life_health_questionnaire')
							</div>

								<div>
									<a id="next-btn" href="#" type="submit" class="btn btn-info">Next</a>
								</div>

								<div class="hide-this" id="tier2-btn">
									<a id="back-btn" href="#" type="submit" class="btn btn-success">Back</a>
									{{Form::submit('Instant Quote', ['class' => 'btn btn-info']) }}
								</div>

							{{ Form::close() }}   
						</div>
					
					</div>
				</div><!--/col-->

			</div><!--/row-->		
		</div><!-- end: Content -->
	</div>
</div>

@stop



@section('bottom-script')
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="/assets/js/jquery-2.1.0.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="/assets/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/assets/js/jquery.sparkline.min.js"></script>
	<script src="/assets/js/jquery.chosen.min.js"></script>
	<script src="/assets/js/jquery.cleditor.min.js"></script>
	<script src="/assets/js/jquery.autosize.min.js"></script>
	<script src="/assets/js/jquery.placeholder.min.js"></script>
	<script src="/assets/js/jquery.maskedinput.min.js"></script>
	<script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="/assets/js/bootstrap-datepicker.min.js"></script>
	<script src="/assets/js/bootstrap-timepicker.min.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/daterangepicker.min.js"></script>
	<script src="/assets/js/jquery.hotkeys.min.js"></script>
	<script src="/assets/js/bootstrap-wysiwyg.min.js"></script>
	<script src="/assets/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- theme scripts -->
	<script src="/assets/js/custom.min.js"></script>
	<script src="/assets/js/core.min.js"></script>


	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->


	<script>
	 $(document).ready(function () {

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

		$('#next-btn').on('click', function() {
			$(this).hide();
			$('#tier2-btn').show();

			$('#section-2').fadeIn();
			$('#section-1').hide();
		});	
		$('#back-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-1').fadeIn();
			$('#section-2').hide();
		});

	});





	</script>




@stop
