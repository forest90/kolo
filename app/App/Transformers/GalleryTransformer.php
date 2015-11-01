<?php 

namespace App\Transformers;
use Carbon\Carbon;

class GalleryTransformer{
	
	public function getPhotosForGallery($photos)
	{
		foreach ($photos as $photo) {
			$photo->path = asset($photo->path);
			$photo->create_date = $photo->created_at->toDateString();
		}
	}

	public function getCategoryWithPhoto($categories)
	{
		$result = [];
		foreach ($categories as $key => $value) {
			// dd($value);
			// if($value->photos) {dd($value->photos->toArray());}
			$result[] = [
				'id' => $value->id,
				'name' => $value->name,
				'description' =>$value->description,
				'created_at' => $value->created_at,
				'path' => !empty($value->photos) ? $value->photos->path : null,
				'create_date' => $value->created_at->toDateString()
			];
		}
		// dd($result);
		return $result;
	}

	public function getPhotosForCategory($photos)
	{
		$result = [];
		$name = '';
		foreach ($photos as $key => $value) {

			$name = $value->category->name;
			$result[] = [
				'id' => $value->id,
				'name' => $value->name,
				'description' =>$value->description,
				'created_at' => $value->created_at,
				'path' => $value->path,
				'create_date' => $value->created_at->toDateString()
			];

		}
		return [$result, $name];
	}
}