@extends('layouts.master')


@section('content')

<div id="hero-container">
	<div class="container">
		<div class="row col-sm-12 col-md-12 col-lg-12">
			<h1 id="hero-headline">The easiest and most affordable way to buy insurance</h1>
			<h3 id="hero-subheadline">Simple, Clear, and Transparent price comparison</h3>
		</div>
		<div class="row col-sm-7 col-md-5 col-lg-5">
			<form class="form-group" id="form_select_ins_type" method="POST" action="">
				<div class="form-select">
					<select name="insurance_selection" class="form-control">
						<option disabled="disabled" selected>What type of insurance do you need?</option>
						<option value="life_ins">Life Insurance</option>
						<option value="disability_ins">Disability Insurance</option>
					</select>
				</div>
			</form>
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
		<div class="row col-sm-12">
			<h1 class="white">No more pushy insurance sales agent!</h1>
			<h3 class="white">Get insurance comparison quotes in minutes.</h3>
			<a href="{{{ action('LifeRFQController@create') }}}" class="btn btn-success btn-lg" type="button">Get Your No Hassle Quote</a>
		</div>
	</div>
</div>

<!-- Thumbnail labels -->
<div class="row container-darker">
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				
				<a href="#">
				  <div class="col-md-3 ">
					<div class="thumbnail thumbnail-darker thumbnail-box">
					  <h1 class="text-center"><i class="fa fa-usd fa-4 white"></i></h1>
					  <div class="caption">
						<h3 class="white margin text-center">Products</h3>
						<p class="blue">.</p>
						<p class="text-center"><a href="#" class="btn btn-primary" role="button">Our Insurance Carriers</a>
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
						<p class="blue">.</p>
						<p class="text-center"><a href="{{{ action('ExtrasController@showLearning') }}}" class="btn btn-primary" role="button">Enter to Learn More</a>
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
						<p class="blue">.</p>
						<p class="text-center"><a href="{{{ action('ExtrasController@showCalculator') }}}" class="btn btn-primary" role="button">Assess Your Insurance Needs</a>
					  </div>
					</div>
				  </div> 
				</a>

				<a href="#">
				  <div class="col-md-3"> 
					<div class="thumbnail thumbnail-darker thumbnail-box">
					  <h1 class="text-center"><i class="fa fa-envelope-o white"></i></h1>
					  <div class="caption">
						<h3 class="white margin text-center">Contact Us</h3>
						<p class="blue">.</p>
						<p class="text-center"><a href="#" class="btn btn-primary" role="button">Send Us A Message</a>
					  </div>
					</div>
				  </div>
				</a>

			</div>
		</div>
	</div>
</div>



@stop