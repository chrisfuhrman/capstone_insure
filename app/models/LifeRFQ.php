<?php

class LifeRFQ extends BaseModel {

    protected $table = 'life_rfq';


	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = 
	[
   		'gender',
   		'dob',
        'coverage_amount',
		'coverage_duration',
		'smoker',
		'cholesterol',
		'blood_pressure',
		'drugs'
	];

	public function RFQ() 
	{
		return $this->morphMany('RFQ', 'insurance');
	}

}