<?php
namespace App\Services;
use App\Repositories\GalleryRepository;
use App\Repositories\GalleryCategoriesRepository;
use App\Transformers\GalleryTransformer;
use Carbon\Carbon;
	/**
	* 
	*/
	final class GalleryService
	{
		public $gallery;
		public $categories;
		public $galleryTransformer;
		function __construct(
			GalleryRepository $gallery, 
			GalleryTransformer $galleryTransformer, 
			GalleryCategoriesRepository $categories
		)
		{
			$this->gallery = $gallery;
			$this->categories = $categories;
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
				$name = $file->getClientOriginalName().Carbon::now()->second;
				$mime = 'jpg';
				$size = $file->getSize();
				$file = $file->move($path, $name);
				$filePath = $file->getRealPath();
				$file = \Gallery::create(['name' => $name, 'path' => $path.$name, 'user_id' => $userId]);
			}
		}

		public function getAllGalleryCategories()
		{
			$cateories = $this->gallery->getGalleryCategoriesWithThumb();
			return $this->galleryTransformer->getCategoryWithPhoto($cateories);
		}

		public function getCategoryPhotos($categoryId)
		{
			return $this->categories->getPhotosForCategory($categoryId);
		}

		public function getPhotosForGalleryByCategory($category)
		{
		 	$photos = $this->gallery->getPhotosForCategory($category);
			return $this->galleryTransformer->getPhotosForCategory($photos);
		}
	}