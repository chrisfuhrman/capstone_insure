<?php

class QuoteApplication extends \Eloquent {


    protected $table = 'posts';

	// Add your validation rules here
	public static $rules = 
	[


            // 'school_name' => 'Required|Min:3|Unique:schools,school_name' . ($id ? ",$id" : '')
        ];
        return $rules;

	// Don't forget to fill this array
	protected $fillable = [];

}