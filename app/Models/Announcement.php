<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Announcement extends Model {

	protected $fillable = [];
	protected $guarded = [];
	protected $table = 'announcements';

	public function user()
	{
		return $this->belongsTo('\User', 'user_id', 'id');
	}
}