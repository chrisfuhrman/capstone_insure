@extends('layouts.master')

@section('content')
<!-- SECTION: QUOTE -->
<div class="quote-section">
	<div class="container">

<div class="container">
<div id="content" class="col-lg-10 col-sm-11">
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
			<h2 id="quote-header">Check out our simple and clear life insurance price comparison tool below.</h2>
			</div>


			<div class="box-content">
				<form class="form-horizontal">
					<!-- Name -->
					<div class="form-group">
						<label class="control-label" for="name">Name</label>
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" id="name" class="form-control">
							</div>
						</div>
					</div>		
					<!-- State -->
					<div class="form-group">
						<label class="control-label" for="state">Your State</label>
						<div class="controls">
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-home"></i></span>
								<select class="form-control selectpicker input-tag">
								<option disabled selected> -- select your state -- </option>
								<!-- <option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option> -->
								<!-- <option value="CO">Colorado</option> -->
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<!-- <option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option> -->
								<!-- <option value="KS">Kansas</option> -->
								<!-- <option value="KY">Kentucky</option> -->
								<!-- <option value="LA">Louisiana</option> -->
								<!-- <option value="ME">Maine</option> -->
								<option value="MD">Maryland</option>
								<!-- <option value="MA">Massachusetts</option> -->
								<!--  <option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option> -->
								<option value="NJ">New Jersey</option>
								<!-- <option value="NM">New Mexico</option> -->
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<!-- <option value="ND">North Dakota</option> -->
								<option value="OH">Ohio</option>
								<!-- <option value="OK">Oklahoma</option> -->
								<!-- <option value="OR">Oregon</option> -->
								<option value="PA">Pennsylvania</option>
								<!-- <option value="RI">Rhode Island</option> -->
								<option value="SC">South Carolina</option>
							 <!--    <option value="SD">South Dakota</option> -->
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
							 <!--    <option value="UT">Utah</option>
								<option value="VT">Vermont</option> -->
								<option value="VA">Virginia</option>
								<!-- <option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option> -->
							</select>
							</div>
						</div>
					</div>
					<!-- Gender -->
					<div class="form-group">
					<div class="controls">
						<label class="control-label" for="name">Gender</label>
						<div class="input-group col-sm-4">
	    				<div class="btn-group btn-toggle" data-toggle="buttons">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<label class="btn btn-mini btn-default" for="">
							<input type="radio" name="q1" value="yes">Male</input>
							</label>
		  					<label class="btn btn-mini btn-info" for="">
							<input type="radio" name="q1" value="no">Female</input>
							</label>
						</div>
						</div>
					</div>
					</div>
					<!-- DOB -->
					<div class="form-group">
	            		{{ Form::label('date_of_birth', 'Date of Birth:', array('class' => 'control-label')) }}
		                <div class="controls">
		                    <div class="input-group col-sm-4">
		                        <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
		                    {{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'form-control', 'placeholder' => 'MM/DD/YYYY', 'id' => 'date', 'name' => 'date_of_birth')) }}
		                	</div>
		                </div>

		                {{ $errors->first('date_of_birth', '<span class="help-block">:message</span>') }}
	            	</div>
					<!-- Coverge Amount -->
					<div class="form-group">
						<label class="control-label" for="date">Coverage Amount</label>
						<div class="controls">
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><i class="fa fa-usd"></i></span>
							<select class="form-control selectpicker  input-tag">
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
							<div class="input-group col-sm-4">
								<span class="input-group-addon"><i class="fa fa-tachometer"></i></span>
								<select class="form-control selectpicker input-tag">
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
					<!-- Smoking Status -->

									
			<div class="form-actions">
				<a href="{{{ route('lifeRFQquestionnaire') }}}" type="submit" class="btn btn-primary">Next</a>
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

		// $('form').submit(function(){
		// 	// alert($(this["options"]).val());
		//     return false;
		// });
	});

	</script>




@stop
