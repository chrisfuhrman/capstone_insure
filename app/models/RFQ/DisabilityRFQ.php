<?php

class DisabilityRFQ extends BaseModel {

    // protected $table = 'disability_rfq';


	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = 
	[
   		'gender',
   		'dob',
        'benefit_amount',
		'benefit_duration',
		'smoking_status',
		'health_class',
		'life_rfq_id'
	];

	public function RFQ() 
	{
		return $this->morphMany('RFQ', 'insurance');
	}

}