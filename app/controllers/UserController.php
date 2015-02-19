<?php

class UserController extends BaseController
{

	public function showClientDashboard() {

		$user = Auth::user();
		$userId = $user->id;

		$usersPolicy = User::with('policies')->where('id', '=', $userId)->firstOrFail();
		
		$usersPolicy = User::with('policies')->where('id', '=', $userId)->firstOrFail();			

		return View::make('users.clientdash')->with('user', $user);
	}	


	public function showCreateAccount() {

		return View::make('users.createaccount');
	}

	public function saveCreateAccount() {

		// create the validator
	  //   $validator = Validator::make(Input::all(), User::$rules);

	  //   // attempt validation
	  //   if ($validator->fails()) {

			// Log::warning("User made a bad PostsController request", array('id' => $id));
	  //   	Session::flash('errorMessage', 'Failed to create Account!');

	  //   	return Redirect::back()->withInput()->withErrors($validator);

	  //   } else {
			// dd(Input::all());
		$user = new User;

		$dob = strtotime(Input::get('dob'));

			$user->first_name	= Input::get('first_name');
			$user->middle_name  = Input::get('middle_name');
			$user->last_name  	= Input::get('last_name');
			$user->maiden_name 	= Input::get('maiden_name');
			$user->dob  		= date('Y-m-d',$dob);
			$user->gender 		= Input::get('gender');
			$user->username 	= Input::get('username');
			$user->password 	= Input::get('password');
			$user->email 		= Input::get('email');
			$user->home_phone 	= Input::get('home_phone');
			$user->work_phone	= Input::get('work_phone');
			$user->address 		= Input::get('address');
			$user->address2		= Input::get('address2');
			$user->city 		= Input::get('city');
			$user->state 		= Input::get('state');
			$user->zip  		= Input::get('zip');
			$user->save();

			Session::flash('sucessMessage', 'Sucessfully saved your post!');
			return Redirect::action('HomeController@showHome');
	    // }		

	}
}