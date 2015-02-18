<?php

class UserController extends BaseController
{

	public function showClientDashboard() {

		$user = Auth::user();
		// $userId = $user->id;

		// $usersPolicy = Policy::with('user')->where('user_id', '=', $userId);
		// $data = 
		// [
		// 	'usersPolicy' => $usersPolicy,
		// 	'user' => $user
		// ];
			
		return View::make('User.clientdash');
	}

	public function showCreateAccount() {

		return View::make('User.createaccount');
	}

}