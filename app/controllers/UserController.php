<?php

class UserController extends BaseController
{

	public function showClientDashboard() {

		return View::make('User.clientdash');
	}

	public function showCreateAccount() {

		return View::make('User.createaccount');
	}

}