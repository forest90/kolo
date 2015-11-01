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
	Route::get('/users/{name}', 'HomeController@userPage');
	Route::post('/addPost', 'HomeController@addPost');
	Route::get('/home/{month?}', 'HomeController@home');
	Route::get('/gallery/{id}', 'HomeController@gallery');
	Route::get('/galleryCategories', 'HomeController@galleryCategories');
	Route::post('/uploadGalleryFiles', 'HomeController@uploadGalleryFiles');
	Route::post('/addCategory', 'HomeController@addCategory');
	
});
Route::get('/', 'HomeController@main');
Route::get('/login', 'AuthController@getLogin');
Route::post('/register', 'AuthController@postRegister');
Route::get('/register', 'AuthController@getRegister');
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logout');

// dd('cos');
Route::filter('auth', function(){
	if (!Auth::check())
	{
		return Redirect::to('login');
	}
	
});