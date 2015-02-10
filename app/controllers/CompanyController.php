<?php

class CompanyController extends BaseController
{

	public function showCompanyDashboard() {
		
		return View::make('admin_home');

	}

}