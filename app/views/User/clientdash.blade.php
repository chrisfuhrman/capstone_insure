@extends('layouts.master')

@section('content')

<div class="container-darker">
	<div class="container">
		<h1 class="white"> Welcome USER! </h1>
		<button class="btn btn-primary" type="button">
			  Alerts <span class="badge">2</span>
		</button>

		<ul class="list-group">
			<li class="list-group-item">
	    		<span class="badge">3</span>
	    		To-Do: 
	  		</li>
		</ul>

		<h3>Your In-Progress Application:</h3>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
	    	60% Complete
	  		</div>
		</div>
	</div>
	

</div>


@stop