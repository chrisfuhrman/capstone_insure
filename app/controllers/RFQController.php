<?php

class RFQController extends BaseController 
{
	public function showLifeRFQ() {
		
		return View::make('RFQs.life');
	}

	public function showLifeHealthQuestionnaire() {
		
		return View::make('RFQs.life_health_questionnaire');
	}


	

}