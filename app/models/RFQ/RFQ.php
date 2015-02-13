<?php

class RFQ extends BaseModel {

    protected $table = 'rfq';

    protected $fillable = 
	[
		'zip',
		'insurance_type',
		'user_id'
	];

	// Add your validation rules here
	// public static $rules = 

	public function insurance() 
	{
		return $this->morphTo();
	}


}