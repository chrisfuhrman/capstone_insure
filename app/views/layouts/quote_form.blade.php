@extends('layouts.master')

@section('content')
<!-- SECTION: QUOTE -->
<div class="quote-section">
	<div class="container">
<!-- quote selection -->
		<!-- <h1 id="quote-header">Check out our simple and clear life insurance price comparison tool below.</h1> -->
		<div class="col-xs-6 col-sm-4" id="quote-outer-wrapper">
			<div class="row">

			<form class="form-inline" id="quote-wrapper-form" role="form">

				<!-- State Input -->
					<div class="form-group">

						<div class="input-group">
							<label for="state">Your State</label>
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

				<!-- Gender -->
					<div class="form-group">

						<div class="input-group">
								<label id="input-gender">Gender:</label>
							<div class="radio">
								<label class="radio-inline"><input type="radio" name="gender">Male</label>
								<label class="radio-inline"><input type="radio" name="gender">Female</label>
							</div>
						</div>
					</div>



				<!-- Birthdate -->
					<div class="form-group">

						<div class="input-group">
							<label id="input-dob" for="dob">Date of birth</label>
							<input name="dob" type="text" class="input-tag" id="dob" placeholder="MM/DD/YYYY">                   
						</div>
					</div>

				<!-- Face Amount -->
					<div class="form-group">
						<div class="input-group">
							<label for="state">Coverage Amount</label>
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


					<!-- Duration -->
					<div class="form-group">
						<div class="input-group">
							<label for="state">Length of Coverage</label>
							<select class="form-control selectpicker input-tag">
								<option disabled selected> -- Amount of Coverage -- </option>
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

					<!-- Smoker -->
					<div class="form-group">
						<label for="smoking status">Do you smoke?</label>
							<select class="form-control input-tag" id="input-smoker">
								<option disabled selected></option>
								<option>Yes</option>
								<option>No</option>
							</select>
					</div>

					<!-- Health Class -->
					<!-- <div> -->
					<div class="form-group" id="quote-health-group">
							<label for="health classification">Tell us about your health</label>
							<select class="form-control input-tag" id="input-health">
								<option disabled selected></option>
								<option>Preferred + (Excellent)</option>
								<option>Preferred</option>
								<option>Standard Plus</option>
								<option>Standard</option>
							</select>
						<!-- </div> -->

			
						<a style="color:2ECC71" href="#" data-html="true" data-toggle="tooltip" class="white-tooltip" title="
						Your health classification is determined by a number of factors, including but not limited to: smoking status, health history, certain vitals, any required lab tests, etc.
							<br><br>
						Preferred Plus: 
							<br><br>
						Preferred
							<br><br>
						Standard Plus
							<br><br>
						Standard
						">Health Help</a>


					</div>
					
					<div id="div-quote-btn">
						<button id="quote-btn" type="submit" class="btn btn-primary">Get your quote</button>
					</div>
			</form>


<h1>After the quote is submitted the quotes will be submited in these pannels</h1>

@include('partials.quote_panels')



		</div>
	</div>
	</div>
</div>


	<div class="container">

		<div id="content" class="col-lg-10 col-sm-11">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<div class="box-header">
							<h2>Life Insurance Quote</h2>
						</div>



<!-- put NAME FIELD IN THERE SOMEWHERE -->


						<div class="box-content">
							<form class="form-horizontal">

								<div class="form-group">
									<label class="control-label" for="name">Name</label>
									<div class="controls">
										<div class="input-group col-sm-4">
											<span class="input-group-addon"><i class="fa fa-male"></i></span>
											<input type="text" id="name" class="form-control">
										</div>
									</div>
								</div>		

								<div class="form-group">
									<label class="control-label" for="state">Your State</label>
									<div class="controls">
										<div class="input-group col-sm-4">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" id="state" class="form-control">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label" for="date of birth">Date of birth</label>
									<div class="controls">
										<div class="input-group col-sm-4">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="text" id="date" class="form-control">
										</div>
									<span class="help-block col-sm-8">ex. MM/DD/YEAR</span>
									</div>
								</div>	

								<div class="form-group">
									<label class="control-label" for="date">Coverage Amount</label>
									<div class="controls">
										<div class="input-group col-sm-4">
											<span class="input-group-addon"><i class="fa fa-usd"></i></span>
											<input type="text" id="date" class="form-control">
										</div>
									<span class="help-block col-sm-8">ex. MM/DD/YEAR</span>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label" for="duration">Length of Coverage</label>
									<div class="controls">
										<div class="input-group col-sm-4">
											<span class="input-group-addon"><i class="fa fa-tachometer"></i></span>
											<input type="text" id="duration" class="form-control">
										</div>
									<span class="help-block col-sm-8">ex. MM/DD/YEAR</span>
									</div>
								</div>
	

								<div class="form-group">
									<label class="control-label" for="smoking status">Do you smoke?</label>
									<div class="controls">
										<div class="col-md-1 col-sm-2 col-xs-3">
										    <label class="switch switch-important">
										      <input type="checkbox" class="switch-input" checked>
										      <span class="switch-label" data-on="On" data-off="Off"></span>
										      <span class="switch-handle"></span>
										    </label>
										</div>
									</div>
								</div>
								
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Next</button>
								</div>
							</form>   
						</div>
					</div>
				</div><!--/col-->

			</div><!--/row-->		
		</div><!-- end: Content -->

	</div>





	@include('partials.quote_panels')

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

@stop
