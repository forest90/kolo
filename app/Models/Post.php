<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $fillable = ['name', 'body', 'file_id', 'user_id'];

	public function photos()
	{
		return $this->hasOne('Photo', 'id', 'file_id');
	}

	public function user()
	{
		return $this->hasOne('User', 'id', 'user_id');
	}
}