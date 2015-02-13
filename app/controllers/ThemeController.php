<?php

class ThemeController extends BaseController
{

	public function showTheme() {
		
		return View::make('bootstrap_theme');

	}

}