<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($value) 
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function RFQs() 
	{
		return $this->morphTo();
	}

    public function isAdmin()
    {

    	$roles = User::find($this->id)->roles;

    	foreach ($roles as $role) {
    		$roleArray[] = $role->name;
    	}

    	if (in_array('admin', $roleArray)) {
    		return true;
    	} else {
    		return false;
    	}

  //   	$this->User::with('')->where('user_id', '=', $userId)->firstOrFail();
        return $this->role_id == 1;
    }

	public function policies()
	{
		return $this->hasMany('Policy');
	}

	public function roles(){
		return $this->belongsToMany('Role');
	}

}
