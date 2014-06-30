<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	*@var String fillabel field
	*/
	protected $fillable = ['username','email','occupation','password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function project()
    {
        return $this->hasMany('Projects');
    }

    public function category()
    {
        return $this->hasMany('Categories');
    }

    public function summary()
    {
        return $this->hasMany('Summaries');
    }

    public function task()
    {
        return $this->hasMany('Tasks');
    }

}
