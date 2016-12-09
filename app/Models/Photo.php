<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	protected $table = 'photos';
	protected $fillable = ['name', 'mime_type', 'size', 'path'];

	public function posts($value='')
	{
		$this->belongsTo('posts', 'id', 'file_id');
	}
}