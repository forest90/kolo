<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('before' => 'auth'), function()
{
	Route::get('/users/{name}',[ 'as' => 'home', 'uses' => 'HomeController@userPage']);
	Route::post('/addPost', ['as' => 'post', 'uses' => 'HomeController@addPost']);
	Route::get('/home/{month?}', ['as' => 'homeMonth', 'uses' => 'HomeController@home']);
	Route::get('/gallery/{id}', ['as' => 'gallery', 'uses' => 'HomeController@gallery']);
	Route::get('/galleryCategories', ['as' => 'categories', 'uses' => 'HomeController@galleryCategories']);
	Route::post('/uploadGalleryFiles', ['as' => '', 'uses' => 'HomeController@uploadGalleryFiles']);
	Route::post('/addCategory', ['as' => '', 'uses' => 'HomeController@addCategory']);
	Route::get('/notifications/{id?}', ['as' => 'notifications', 'uses' => 'ManagementController@getAnnouncements']);
	Route::get('/profile', ['as' => 'profile', 'uses' => 'AuthController@profile']);
	Route::get('/members', ['as' => 'members', 'uses' => 'HomeController@members']);
	Route::post('/profile/update', ['as' => 'updateProfile', 'uses' => 'AuthController@postProfile']);
	Route::group(array('before' => 'auth|administration'), function()
	{
		Route::post('/notifications', 'ManagementController@postAnnouncement');
	});
});
Route::get('/', 'HomeController@main');
Route::get('/login', 'AuthController@getLogin');
Route::post('/register', 'AuthController@postRegister');
Route::get('/register', 'AuthController@getRegister');
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/news', ['as' => 'news', 'uses' => 'MainController@news']);
Route::get('/history', ['as' => 'news', 'uses' => 'MainController@history']);
Route::get('/gallery', ['as' => 'main.gallery', 'uses' => 'MainController@gallery']);
Route::get('/scheduler/{month?}', ['as' => 'calendar', 'uses' => 'MainController@calendar']);



// dd('cos');
Route::filter('auth', function(){
	if (!Auth::check())
	{
		return Redirect::to('login');
	}
	
});

View::composer(array('layouts.index'), function($view)
{
    $view
    	->with('announcements', \App::make('HomeController')->getAnnouncements())
    	->with('avatarPath', \App::make('AuthController')->getUserAvatar());
});
View::composer(array('main.index'), function($view)
{
	$isLogged = \Auth::user() ? true : false;
    $view->with('isLogged', $isLogged);
});

