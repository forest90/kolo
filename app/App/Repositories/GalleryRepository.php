<?php 
namespace App\Repositories;
use models;
	/**
	* 
	*/
	class BaseRepository extends \Eloquent
{
	
}
	class GalleryRepository extends BaseRepository
	{
		public $model;
		
		function __construct(\Gallery $model)
		{
			$this->model = $model;
		}
		public function getFirstById($id = null)
		{
			return $this->model->where('id', '=', $id)->photos->get();
		}

		public function getGalleryByPage($page)
		{
			return $this->model->take(9*$page)->get();
		}
	}