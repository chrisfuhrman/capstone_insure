
@extends('layouts.master')


@section('content')

<h1 class="text-center">Your most competitive Life Insurance Quotes</h1>

<div class="container">
	<div class="row">
		<h2 class="text-center"><div class="plans-banner">Simple and Affordable Plans</div></h2>
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center">Banner Life</h4>
				</div>
				<div class="panel-body text-center">
					<p class="lead">
					<strong>$10 / month</strong></p>
				</div>
				<ul class="list-group list-group-flush text-center">
					<li class="list-group-item"><i class="icon-ok text-default"></i>Coverage: $1,000,000</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>30 Year Term Policy</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>A++ Financial Rating</li>
				</ul>
				<div class="panel-footer">
					<a class="btn btn-lg btn-block btn-info" href="{{{ action('PolicyAppController@showLifeAppBL') }}}">Apply Now</a>
			</div>
		</div>	
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center">Banner Life</h4>
				</div>
				<div class="panel-body text-center">
					<p class="lead">
					<strong>$10 / month</strong></p>
				</div>
				<ul class="list-group list-group-flush text-center">
					<li class="list-group-item"><i class="icon-ok text-default"></i>Coverage: $1,000,000</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>30 Year Term Policy</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>A++ Financial Rating</li>
				</ul>
				<div class="panel-footer">
					<a class="btn btn-lg btn-block btn-info" href="{{{ action('PolicyAppController@showLifeAppBL') }}}">Apply Now</a>

				</div>
			</div>
		</div>		
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center">Banner Life</h4>
				</div>
				<div class="panel-body text-center">
					<p class="lead">
					<strong>$10 / month</strong></p>
				</div>
				<ul class="list-group list-group-flush text-center">
					<li class="list-group-item"><i class="icon-ok text-default"></i>Coverage: $1,000,000</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>30 Year Term Policy</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>A++ Financial Rating</li>
				</ul>

				<div class="panel-footer">
					<a class="btn btn-lg btn-block btn-info" href="{{{ action('PolicyAppController@showLifeAppBL') }}}">Apply Now</a>
			</div>
		</div>		
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="text-center">Banner Life</h4>
				</div>
				<div class="panel-body text-center">
					<p class="lead">
					<strong>$10 / month</strong></p>
				</div>
				<ul class="list-group list-group-flush text-center">
					<li class="list-group-item"><i class="icon-ok text-default"></i>Coverage: $1,000,000</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>30 Year Term Policy</li>
					<li class="list-group-item"><i class="icon-ok text-default"></i>A++ Financial Rating</li>
				</ul>
				<div class="panel-footer">
					<a class="btn btn-lg btn-block btn-info" href="{{{ action('PolicyAppController@showLifeAppBL') }}}">Apply Now</a>
			</div>
		</div>
	</div>


</div>


@stop