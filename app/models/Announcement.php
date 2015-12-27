<?php


class Announcement extends \Eloquent {

	protected $fillable = [];
	protected $guarded = [];
	protected $table = 'announcements';

	public function user()
	{
		return $this->belongsTo('\User', 'user_id', 'id');
	}
}