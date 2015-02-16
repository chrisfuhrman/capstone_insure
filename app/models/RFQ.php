<?php

class RFQ extends BaseModel {

    protected $table = 'rfq';

    protected $fillable = 
	[
		'first_name',
		'zip',
		'insurance_id',
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