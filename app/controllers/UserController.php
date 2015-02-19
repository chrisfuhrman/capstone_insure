<?php

class UserController extends BaseController
{

	public function showClientDashboard() {

		$user = Auth::user();
		$userId = $user->id;

		// $usersPolicy = Policy::with('user')->where('user_id', '=', $userId);
		$usersPolicy = User::with('policies')->where('id', '=', $userId)->firstOrFail();

		// $usersPolicy = Policy::with('user')->where('user_id', '=', $userId)->firstOrFail();
		// dd($usersPolicy);
		
		// $data = 
		// [
		// 	'usersPolicy' => $usersPolicy,
		// 	'user' => $user
		// ];
			

		
		
		return View::make('users.clientdash')->with('user', $user);

	}

	public function showCreateAccount() {

		return View::make('User.createaccount');
	}

}