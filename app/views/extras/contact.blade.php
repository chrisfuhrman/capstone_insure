@extends('layouts.master')

@section('content')

<div class="container contact-container">
  <div class="row">
    <div class="col-md-6">
      <form class="form-horizontal">
      	<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
            	<input type="email" class="form-control" id="inputName" placeholder="Name">
          	</div>
        	</div>
        		<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
            	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
          	</div>
        	</div>
        	<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
          		<textarea class="form-control" rows="3" placeholder="Write your question here."></textarea>
          	</div>
        	</div>
        	<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
            	<button type="submit" class="btn btn-default">Send</button>
          	</div>
        	</div>
      </form>
    </div>
  </div>
</div>

@stop