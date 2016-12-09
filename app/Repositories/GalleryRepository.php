<?php 
namespace App\Repositories;

use App\Models\Gallery;

class GalleryRepository extends BaseRepository
{
    public $model;

    function __construct(Gallery $model)
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

    public function getAllPhotosForCategory($categoryId)
    {
        // return $this->model->with(['category'])->where()->get();
    }
    public function getGalleryCategoriesWithThumb()
    {
        return $this->model->where('category_id', '!=', 'null')->with(['category'])->groupBy('category_id')->get();
    }

    public function getPhotosForCategory($category)
    {
        return $this->model->where('category_id', '=', $category)->with(['category'])->get();
    }
}