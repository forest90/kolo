<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use App\Services\GalleryService;
use App\Services\ManagementNotificationsService;
use Illuminate\Support\Facades\Session;


class HomeController extends BaseController {


	public $post;
	public $gallery;
	public $managementNotificationsService;


	public function __construct(
		Post $post, 
		GalleryService $gallery, 
		ManagementNotificationsService $managementNotificationsService
		)
	{
		$this->post = $post;
		$this->gallery = $gallery;
		$this->managementNotificationsService = $managementNotificationsService;
	}

	public function getAnnouncements()
	{
		return $this->managementNotificationsService->getAllAnnouncements();
	}

	public function home($month = null)
	{
		$canAdd = Auth::getUser()->user_type == User::TYPE_ADMINISTRATION;
		if(!$month)
		{
			$month = Carbon::now()->month;
		}

			$posts = $this->post;
			if($posts){
				$posts = $posts
				->with('photos', 'user', 'user.avatar')
				->orderBy('created_at', 'DESC')
				->get();
			}else{
				$posts = [];
			}
			// dd($posts->toArray());
		$announcements = $this->managementNotificationsService->getAllAnnouncements();


		return view('layouts.new_main')->with(compact('posts', 'month', 'announcements', 'canAdd'));
	}

	public function userPage($name = null)
	{
		return view('layouts.mainPage')->with(compact('name'));
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
		Post::create(
			Input::only(['name', 'body'])+
			[
				'user_id' => Auth::getUser()->id,
				'file_id' => isset($file_id) ? $file_id : null,
			]
		);
		$posts = $this->post;
		if($posts){

			$posts->orderBy('created_at', 'DESC')->with('photos')->get();
		}

		return Redirect::action('HomeController@home')->with(compact('posts'));
	}
	public function main()
	{
		$message  =null;
		if(Session::get('message')){
			$message = Session::get('message');
		}
		return view('main.main')->with('message', $message);
	}
	public function gallery($id = 1)
	{
		list($photos, $categoryName) = $this->gallery->getPhotosForGalleryByCategory($id);			
		$aside = false;
		$title = $categoryName;
		return view('gallery.main')->with(compact('photos', 'aside', 'title', 'id'));
	}
	public function uploadGalleryFiles()
	{
		$this->gallery->uploadGalleryFiles(Input::file('photos'), Auth::id(), Input::get('id'));
		return $this->gallery(Input::get('id'));
	}

	public function galleryCategories()
	{
		$categories = $this->gallery->getAllGalleryCategories();
		$title = 'Kategorie galerii';
		$aside = false;
		return view('gallery.categories')->with(compact('categories', 'title', 'aside'));
	}
	public function addCategory()
	{
		GalleryCategory::create(Input::only('name', 'description'));
		return Redirect::action('HomeController@galleryCategories');

	}
	public function members()
	{
		return view('layouts.members')->with(['users' => User::with(['avatar'])->get()]);
	}
}
