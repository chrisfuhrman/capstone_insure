<?php

class ExtrasController extends BaseController {

	public function showProducts(){
		
		return View::make('extras.products');
	}

	public function showLearning(){

		return View::make('extras.learning');
	}

	public function showCalculator(){
		
		return View::make('extras.calculator');
	}

	public function showContact(){
		
		return View::make('extras.contact');
	}

	public function showAbout(){
		
		return View::make('extras.about');
	}
}