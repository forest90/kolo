<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

	protected $fillable = [];
	protected $guarded = [];
	protected $table = 'galleries';

	public function category()
	{
		return $this->hasOne('\GalleryCategory', 'id', 'category_id');
	}
}