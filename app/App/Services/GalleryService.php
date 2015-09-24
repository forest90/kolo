<?php
namespace App\Services;
use App\Repositories\GalleryRepository;
use App\Transformers\GalleryTransformer;
	/**
	* 
	*/
	final class GalleryService
	{
		public $gallery;
		public $galleryTransformer;
		function __construct(GalleryRepository $gallery, GalleryTransformer $galleryTransformer)
		{
			$this->gallery = $gallery;
			$this->galleryTransformer = $galleryTransformer;
		}

		public function getPhotosForGalleryByPage($page)
		{
			$photos = $this->gallery->getGalleryByPage($page);
			$this->galleryTransformer->getPhotosForGallery($photos);
			return $photos;
		}

		public function uploadGalleryFiles($files, $userId)
		{
			foreach ($files as $file) {
				$path = \Config::get('paths.gallery');
				$name = $file->getClientOriginalName();
				$mime = 'jpg';
				$size = $file->getSize();
				$file = $file->move($path, $name);
				$filePath = $file->getRealPath();
				$file = \Gallery::create(['name' => $name, 'path' => $path.$name, 'user_id' => $userId]);
			}
		}
	}