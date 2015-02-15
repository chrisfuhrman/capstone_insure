<?php

class ExtrasController extends BaseController {

	public function showProducts(){
		
		return View::make('products');
	}

	public function showLearning(){

		return View::make('learningCenter');
	}

	public function showCalculator(){
		
		return View::make('calculator');
	}

	public function showContact(){
		
		return View::make('contact');
	}
}