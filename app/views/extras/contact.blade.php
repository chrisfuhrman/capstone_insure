@extends('layouts.master')

@section('content')

<div class="container contact-container">
  <h1 class="text-center">Have A Question?</h1>
    <div class="mini-container">
      <p class="text-center">Have a question, comment, or a problem? Simply fill out the form below and let us know!</p>
    </div>
  <div class="row">

    <div class="col-md-6">
      <form action="{{{ action('HomeController@sendContactUs') }}}" class="form-horizontal">

    <div class="col-md-5 col-md-offset-3">
      <form class="form-horizontal">

      	<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
            	<input name="name" type="text" class="form-control" id="inputName" placeholder="Name">
          	</div>
        	</div>
        		<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
            	<input name="email_address" type="email" class="form-control" id="inputEmail" placeholder="Email">
          	</div>
        	</div>
        	<div class="form-group">
          	<div class="col-sm-10 col-sm-offset-2">
          		<textarea name="content" class="form-control" rows="3" placeholder="Write your question here."></textarea>
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