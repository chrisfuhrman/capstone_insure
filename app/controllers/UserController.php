<?php

class UserController extends BaseController
{

	public function showClientDashboard() {

		$user = Auth::user();
		$userId = $user->id;

		$usersPolicy = Policy::with('user')->where('user_id', '=', $userId);
		dd($usersPolicy);
		$data = 
		[
			'usersPolicy' => $usersPolicy,
			'user' => $user
		];
			
		return View::make('PolicyApps.BannerLife.banner-life-app')->with($data);
	}	
		return View::make('User.clientdash');
	}

	public function showCreateAccount() {

		return View::make('User.createaccount');
	}

}