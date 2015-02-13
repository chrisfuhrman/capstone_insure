<?php

class AdminController extends BaseController
{

	public function showCompanyDashboard() {
		
		return View::make('admin_panel.dashboard');

	}

}