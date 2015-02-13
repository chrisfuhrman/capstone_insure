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
			<a href="{{{ route ('lifeRFQ') }}}" class="btn btn-success btn-lg" type="button">Get Your No Hassle Quote</a>

		</div>
	</div>
</div>

<!-- Thumbnail labels -->
<div class="row container-darker">
	<div class="col-md-12">
		<div class="container">
			<div class="row">
			  <div class="col-md-3">
			    <div class="thumbnail thumbnail-darker">
			      <i class="fa fa-usd fa-4 white"></i>
			      <div class="caption">
			        <h3 class="white">Products</h3>
			        <p>...</p>
			        <p class="align-button"><a href="#" class="btn btn-primary" role="button">Button</a>
			      </div>
			    </div>
			  </div>
						<div class="divider-1"></div>
			  <div class="col-md-3">
			    <div class="thumbnail thumbnail-darker">
			      <img src="..." alt="...">
			      <div class="caption">
			        <h3 class="white">Learning Center</h3>
			        <p>...</p>
			        <p class="align-button"><a href="#" class="btn btn-primary" role="button">Button</a>
			      </div>
			    </div>
			  </div>
			
						<div class="divider-2"></div>
			  <div class="col-md-3">
			    <div class="thumbnail thumbnail-darker">
			      <img src="..." alt="...">
			      <div class="caption">
			        <h3 class="white">Calculators</h3>
			        <p>...</p>
			        <p class="align-button"><a href="#" class="btn btn-primary" role="button">Button</a>
			      </div>
			    </div>
			  </div> 
			  			<div class="divider-3"></div>
			  <div class="col-md-3"> 
			    <div class="thumbnail thumbnail-darker">
			      <img src="..." alt="...">
			      <div class="caption">
			        <h3 class="white">Contact Us</h3>
			        <p>...</p>
			        <p class="align-button"><a href="#" class="btn btn-primary" role="button">Go</a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>



@stop