<?php

class ApplicationController extends BaseController 
{
	public function showLifeApplication() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('amer_gen_life.ag_form_sec_1');


	}

}