<?php

class UserController extends BaseController
{

	public function showClientDashboard() {

		$user = Auth::user();
		$userId = $user->id;

		$usersPolicy = User::with('policies')->where('id', '=', $userId)->firstOrFail();
							
		$policy = User::with('policies')->where('id', '=', $userId)->firstOrFail();	

		$data = 
		[
			'policy' => $policy,
			'user' => $user,
			'userId' => $user
		];		

		return View::make('users.clientdash')->with($data);
	}	

	public function update($id)
	{
		$user = User::findorfail($id);

		return $this->saveUser($user);
	}

	public function edit($id) {
		$user = User::findorfail($id);

		return View::make('User.update_profile')->with('user', $user);
	}

	public function saveUser($user) {

		$dob = strtotime(Input::get('dob'));

		$user->first_name	= Input::get('first_name');
		$user->middle_name  = Input::get('middle_name');
		$user->maiden_name 	= Input::get('maiden_name');
		$user->last_name  	= Input::get('last_name');
		$user->dob  		= date('Y-m-d',$dob);
		$user->home_phone 	= Input::get('home_phone');
		$user->address 		= Input::get('address');
		$user->address2		= Input::get('address2');
		$user->city 		= Input::get('city');
		$user->state 		= Input::get('state');
		$user->zip  		= Input::get('zip');
		$user->gender 		= Input::get('gender');
		$user->save();

		Session::flash('sucessMessage', 'Sucessfully updated your Profile!');
		return Redirect::to('life-policy-app-bl');	

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
			$user->last_name  	= Input::get('last_name');
			$user->dob  		= date('Y-m-d',$dob);
			$user->gender 		= Input::get('gender');
			$user->username 	= Input::get('username');
			$user->password 	= Input::get('password');
			$user->email 		= Input::get('email');
			$user->state 		= Input::get('state');
			$user->save();

			$user->roles()->attach(1);
			$user->save();






			$user = User::findOrFail($user->id);
			Auth::login($user);

			Session::flash('sucessMessage', 'Sucessfully created your Profile!');
			return Redirect::to('profile');		

	}
}