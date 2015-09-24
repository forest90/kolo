<?php 

namespace App\Transformers;

class GalleryTransformer{
	
	public function getPhotosForGallery($photos)
	{
		foreach ($photos as $photo) {
			$photo->path = asset($photo->path);
		}
	}

}