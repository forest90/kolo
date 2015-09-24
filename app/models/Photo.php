<?php

class Photo extends \Eloquent {
	protected $table = 'photos';
	protected $fillable = ['name', 'mime_type', 'size', 'path'];

	public function posts($value='')
	{
		$this->belongsTo('posts', 'id', 'file_id');
	}
}