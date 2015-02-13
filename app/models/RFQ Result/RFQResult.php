<?php

class RFQResult extends BaseModel {

	protected $table = 'rfq_results';


	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = 
	[
		'insurance_type',
		//is this redundant, since its in the RFQ???
		'insurance_carrier',
		'financial_rating',
		'premium_mode',
		'monthly_premium',
		'yearly_premium',
		'rfq_results_id'
	];

	// public function quote_results() 
	// {
	// 	return $this->morphTo();
	// }	






}