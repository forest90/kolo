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
			$name = $this->getNameOfCategory($photos);
		foreach ($photos->photosForCategories as $value) {
			$result[] = [
				'id' => $value['id'],
				'name' => $value['name'],
				'description' =>$value['description'],
				'created_at' => $value['created_at'],
				'path' => $value['path'],
				'create_date' => $value['created_at']
			];

		}
		return [$result, $name];
	}
	private function getNameOfCategory($photos)
	{
		if(!$photos) return null;
		foreach ($photos as $photo) {
			if(isset($photo->name) and !empty($photo->name)){
				return $photo->name;
			}
		}
		return null;
	}
}