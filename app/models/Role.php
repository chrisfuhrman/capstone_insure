<?php

class Role extends BaseModel {


    protected $table = 'roles';

	// Add your validation rules here

	protected $fillable = 
	[
		'user',
		'admin',
		'marketing',
		'customer_support',
		'executive'
	];

	 public function users() {
        return $this->belongsToMany('User');
    }

}	