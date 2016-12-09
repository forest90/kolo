<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ManagementNotification extends Model {

	protected $fillable = ['title', 'content', 'user_id'];
	protected $guarded = [];
	protected $table = 'management_notifications';

	public function user()
	{
		return $this->belongsTo('\User', 'user_id', 'id');
	}
}