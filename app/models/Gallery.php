<?php


class Gallery extends \Eloquent {

	protected $fillable = [];
	protected $guarded = [];
	protected $table = 'galleries';

	public function category()
	{
		return $this->hasOne('\GalleryCategory', 'id', 'category_id');
	}
}