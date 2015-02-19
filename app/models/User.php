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
  //   	$role_id = Role::with('id')where('name', '=', 'admin')->firstOrFail();

		// $userId = $user->id;



  //   	$this->User::with('')->where('user_id', '=', $userId)->firstOrFail();
        return $this->role_id == 1;
    }

	public function policies()
	{
		return $this->hasMany('Policy');
	}

}
