@extends('layouts.master')

@section('content')

<form class="form-horizontal">
	<div class="form-group">
    	<label for="inputName" class="col-sm-2 control-label">Name</label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control" id="inputName" placeholder="Email">
    	</div>
  	</div>
  		<div class="form-group">
    	<label for="inputEmail" class="col-sm-2 control-label">Email</label>
    	<div class="col-sm-10">
      	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
    		<textarea class="form-control" rows="3" placeholder="Write your question here."></textarea>
    	</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      	<button type="submit" class="btn btn-default">Send</button>
    	</div>
  	</div>
</form>

@stop