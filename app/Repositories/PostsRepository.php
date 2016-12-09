<?php 
namespace App\Repositories;

use App\Models\Post;

class PostsRepository extends BaseRepository
{
    public $model;

    function __construct(Post $model)
    {
        $this->model = $model;
    }
    public function getFirstById($id = null)
    {
        return $this->model->where('id', '=', $id)->photos->get();
    }

    public function getPostsForMain($number=10)
    {
        return $this->model->take($number)->orderBy('created_at', 'DESC')->get();
    }
}