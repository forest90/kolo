<?php


class ManagementNotification extends \Eloquent {

	protected $fillable = ['title', 'content', 'user_id'];
	protected $guarded = [];
	protected $table = 'management_notifications';

	public function user()
	{
		return $this->belongsTo('\User', 'user_id', 'id');
	}
}