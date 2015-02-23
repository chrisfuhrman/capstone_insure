<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		
		return View::make('home');

	}

	
	public function sendContactUs()
	{
		$name = Input::get('name');
		$email_address = Input::get('email_address');
		$content = Input::get('content');

		try {

			Mail::send('emails.contact_us', 
				['name' => $name, 'email_address' => $email_address, 'content' => $content], 
				function($message) {
		    		$message->to('chrisfuhrman@gmail.com', 'InsureJoy Support')->subject('InsureJoy Contact Request');
				});
			
		} catch (Exception $e) {

			Session::flash('errorMessage', 'Your emailed failed to send.');
			return Redirect::action('HomeController@showHome');

		}
			
		Session::flash('successMessage', 'Your email was successfully sent.');
		return Redirect::action('HomeController@showHome');

	}


}
