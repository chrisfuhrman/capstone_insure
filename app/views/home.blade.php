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


			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, esse obcaecati. Iure est officia dolorum, vodelectus facere sed laudantium suscipit quo?</p>

		</div>

		<!-- delete this eventually -->
		<div class="row col-sm-12 col-md-12 col-lg-12">
			<h1 style="color:#fff">This is appx how high I think this first DIV should be</h1>
		</div>
	</div>
</div>

<div id="next-container">
	<div class="container">
		<div class="row col-sm-12">
			<h1>No more pushy insurance sales agent!</h1>
			<h3>Get insurance comparison quotes in minutes.</h3>
			<a href="quote" class="btn btn-primary btn-lg" type="button">Get Your No Hassle Quote</a>

		</div>
	</div>
</div>




@stop