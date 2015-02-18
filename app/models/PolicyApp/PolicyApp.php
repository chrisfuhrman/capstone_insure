<?php

class PolicyApp extends BaseModel {



    protected $table = 'policy_apps';

	// Add your validation rules here
	public static $rules = [
		// 'title' ired'
	];

	// Don't forget to fill this array
	protected $fillable = 
	[
		'first_name',
		'middle_name', 
        'last_name', 
        'maiden_name', 
        'dob', 
        'gender',
        'home_phone',
        'address',
        'address2',
        'city',
        'state',
        'zip',
		'coverage_amount',
		'coverage_duration',
		'yearly_premium',
		'monthly_premium',
		'policy_in_force',
		'policy_status',
		'date_approved',
		'user_id'
	];

}