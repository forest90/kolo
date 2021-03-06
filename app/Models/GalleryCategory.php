<?php


class GalleryCategory extends \Eloquent {

	protected $fillable = [];
	protected $guarded = [];
	protected $table = 'gallery_categories';

	public function photos()
	{
		return $this->belongsTo('Gallery', 'id', 'category_id');
	}

	public function photosForCategories()
	{
		return $this->hasMany('Gallery', 'category_id', 'id');
	}
	// public function thumbPhoto()
	// {
	// 	$this->hasOne('Gallery', '');
	// }
}