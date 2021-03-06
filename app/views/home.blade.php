@extends('layouts.master')

	

@section('content')

<div id="hero-container" >
	<div class="container homepage-padding-left">
		<div class="row col-sm-12 col-md-12 col-lg-12">
			<h1 id="hero-headline">The easiest and most affordable way to buy insurance</h1>
			<h3 id="hero-subheadline">Simple, Clear, and Transparent price comparison</h3>
		</div>
		<div class="row col-sm-7 col-md-5 col-lg-5">
			<div class="form-select">
				<select id="insurance_selection" class="form-control">
					<option disabled="disabled" selected>What type of insurance do you need?</option>
					<option value="life_ins">Life Insurance</option>
					<option value="disability_ins">Disability Insurance</option>
				</select>
			</div>
		</div>
		<div class="clear-fix"></div>
		<div class="row" id="btn-ins-group">
			<a href="{{{ action('LifeRFQController@create') }}}" id="life-btn" class="hide-this btn btn-success btn-lg" type="button">Instant Life Quote</a>
			<a href="{{{ action('LifeRFQController@create') }}}" id="dis-btn" class="hide-this btn btn-success btn-lg" type="button">Instant Disability Quote</a>
		</div>
	</div>
</div>

		<!-- delete this eventually -->
		<div class="row col-sm-12 col-md-12 col-lg-12">
			<!-- <h1 style="color:#fff">This is appx how high I think this first DIV should be</h1> -->
		</div>
	</div>
</div>

<div id="next-container">
	<div class="container">
		<div class="row col-sm-8">
			<h1 class="white">No more pushy insurance sales agents!</h1>
			<h3 class="white">Get insurance comparison quotes in minutes.</h3>
			
		</div>
			<span id="home-btn"><a href="{{{ action('LifeRFQController@create') }}}" class="btn btn-success btn-lg" type="button">Get Your No Hassle Quote</a></span>
	</div>
</div>

<!-- Thumbnail labels -->
<div class="row container-darker">
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				
				<a href="{{{ action('ExtrasController@showProducts') }}}">
				  <div class="col-md-3 ">
					<div class="thumbnail thumbnail-darker thumbnail-box">
					  <h1 class="text-center"><i class="fa fa-usd fa-4 white"></i></h1>
					  <div class="caption">
						<h3 class="white margin text-center">Products</h3>
						<p class="text-center"><a href="{{{ action('ExtrasController@showProducts') }}}" class="btn btn-primary btn-margin" role="button">Our Insurance Carriers</a>
					  </div>
					</div>
				  </div>
				</a>

				<a href="{{{ action('ExtrasController@showLearning') }}}">
				  <div class="col-md-3 ">
					<div class="thumbnail thumbnail-darker thumbnail-box">
					  <h1 class="text-center"><i class="fa fa-pencil white"></i></h1>
					  <div class="caption">
						<h3 class="white margin text-center">Learning Center</h3>
						<p class="text-center"><a href="{{{ action('ExtrasController@showLearning') }}}" class="btn btn-primary btn-margin" role="button">Enter to Learn More</a>
					  </div>
					</div>
				  </div>
				</a>
				
				<a href="{{{ action('ExtrasController@showCalculator') }}}">
				  <div class="col-md-3">
					<div class="thumbnail thumbnail-darker thumbnail-box">
					  <h1 class="text-center"><i class="fa fa-calculator white"></i></h1>
					  <div class="caption">
						<h3 class="white margin text-center">Calculators</h3>
						<p class="text-center"><a href="{{{ action('ExtrasController@showCalculator') }}}" class="btn btn-primary btn-margin" role="button">Assess Your Insurance Needs</a>
					  </div>
					</div>
				  </div> 
				</a>

				<a href="{{{ action('ExtrasController@showContact') }}}">
				  <div class="col-md-3"> 
					<div class="thumbnail thumbnail-darker thumbnail-box">
					  <h1 class="text-center"><i class="fa fa-envelope-o white"></i></h1>
					  <div class="caption">
						<h3 class="white margin text-center">Contact Us</h3>
						<p class="text-center"><a href="{{{ action('ExtrasController@showContact') }}}" class="btn btn-primary btn-margin" role="button">Send Us A Message</a>
					  </div>
					</div>
				  </div>
				</a>

			</div>
		</div>
	</div>
</div>
@stop

@section('bottom-script')
	<script>
	
$('#insurance_selection').on('change', function() {
	var val = $(this).val();

	if (val == 'disability_ins') {
		$('#dis-btn').show()
			.siblings().hide();
	} else if (val == 'life_ins') {
		$('#life-btn').show()
			.siblings().hide();
	}

});

	</script>
@stop
