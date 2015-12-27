<?php

class Post extends Eloquent {
	protected $fillable = ['name', 'body', 'file_id'];

	public function photos()
	{
		return $this->hasOne('Photo', 'id', 'file_id');
	}

	public function user()
	{
		return $this->hasOne('User', 'id', 'user_id');
	}
}