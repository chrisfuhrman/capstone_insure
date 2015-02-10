<?php

class QuoteController extends BaseController 
{
	public function showLifeQuote() {
		
		return View::make('layouts.quote_form');
	}

}