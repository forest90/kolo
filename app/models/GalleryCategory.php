<?php


class GalleryCategory extends \Eloquent {

	protected $fillable = [];
	protected $guarded = [];
	protected $table = 'gallery_categories';

	public function photos()
	{
		return $this->hasMany('Gallery', 'id', 'category_id');
	}

	// public function thumbPhoto()
	// {
	// 	$this->hasOne('Gallery', '');
	// }
}