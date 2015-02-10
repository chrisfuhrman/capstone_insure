<?php

class School extends Eloquent {

    $states = 
        [
            ''

        ];



    protected $table = 'posts';

    
    protected $fillable = 

        [
            
      
        ];

    public static function rules ($id=0) {
        $rules = 
        [


            // 'school_name' => 'Required|Min:3|Unique:schools,school_name' . ($id ? ",$id" : '')
        ];
        return $rules;
    }


}