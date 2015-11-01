<?php 
namespace App\Repositories;
use models;

class GalleryCategoriesRepository extends BaseRepository
	{
		public $model;
		
		function __construct(\GalleryCategory $model)
		{
			$this->model = $model;
		}
		public function getFirstById($id = null)
		{
			return $this->model->where('id', '=', $id)->photos->get();
		}

		public function getGalleryByPage($page)
		{
			return $this->model->take(12*$page)->get();
		}

		public function getAllCategories()
		{
			// return $this->model->with(['photos' ])->get();

				// ->join('galleries', function ($query) {
	   //              $query->select(\DB::raw(1))
	   //                    ->on('gallery_categories.id = galleries.category_id');
	   //          })
				// ->join('galleries', function($join)
				// {
				// 	$join->on('gallery_categories.id', '=' ,'galleries.category_id');
					
				// }) 
				// ->get();
			// return  $this->model->select
			// ( 'gallery_categories',
   //          	\DB::raw(
	  //           	'(select * from galleries where category_id = gallery_categories.id limit 1) as photo'
   //          	)
   //          )->get();
		}
		public function getPhotosForCategory($categoryId)
		{
			return $this->model->with(['photos'])->where('id', '=', $categoryId)->get();
		}
	}