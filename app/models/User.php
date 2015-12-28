<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	const TYPE_REGULAR = 'regular';
	const TYPE_ADMINISTRATION = 'administration';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $guarded = [];
	// protected $fillable = ['nick', 'avatar_id'];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	// protected $hidden = array('password', 'remember_token');
	public function avatar()
	{
		return $this->hasOne('Photo', 'id', 'avatar_id');
	}

}
