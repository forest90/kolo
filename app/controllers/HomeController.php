<?php
use Carbon\Carbon;
use App\Services\GalleryService;


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $post;
	public $gallery;


	public function __construct(Post $post, GalleryService $gallery)
	{
		$this->post = $post;
		$this->gallery = $gallery;
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function home($month = null)
	{
		if(!$month)
		{
			$month = Carbon::now()->month;
		}

		$posts = $this->post->find(1)->orderBy('created_at', 'DESC')->with('photos')->get();

		return View::make('layouts.main')->with(compact('posts', 'month'));
	}

	public function userPage($name = null)
	{
		return View::make('layouts.mainPage')->with(compact('name'));
	}

	public function addPost()
	{

		if(Input::hasFile('photo')){
			$path = \Config::get('paths.upload');
			$name = Input::file('photo')->getClientOriginalName();
			$mime = 'jpg';
			$size = Input::file('photo')->getSize();
			$file = Input::file('photo')->move($path, $name);
			$filePath = $file->getRealPath();
			$file = Photo::create(['mime_type' => $mime, 'size' => $size, 'path' => $path.$name]);
			$file_id = $file->id;
		}
		Post::create(Input::only(['name', 'body'])+['file_id' => isset($file_id) ? $file_id : null]);
		$posts = $this->post->find(1)->orderBy('created_at', 'DESC')->with('photos')->get();

		return Redirect::action('HomeController@home')->with(compact('posts'));
	}
	public function main()
	{
		return View::make('main.index');
	}
	public function gallery($page = 1)
	{

		$photos = $this->gallery->getPhotosForGalleryByPage($page);
		$aside = false;
		$title = 'Galeria';
		return View::make('gallery.main')->with(compact('photos', 'aside', 'title'));
	}
	public function uploadGalleryFiles()
	{
		$this->gallery->uploadGalleryFiles(Input::file('photos'), Auth::id());
		return $this->gallery();
	}
}
