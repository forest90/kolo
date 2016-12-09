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
//Route::get('/myapp/install/{key?}',  array('as' => 'install', function($key = null)
//{
//    Artisan::call('migrate:install');
//    echo 'done migrate:install';
//
//    echo '<br>init with Sentry tables migrations...';
//    Artisan::call('migrate', [
//        '--package'=>'cartalyst/sentry'
//    ]);
//    echo 'done with Sentry';
//    echo '<br>init with app tables migrations...';
//    Artisan::call('migrate', [
//        '--path'     => "app/database/migrations"
//    ]);
//    echo '<br>done with app tables migrations';
//    echo '<br>init with Sentry tables seader...';
//}
//));
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
Route::get('/scheduler/{month?}', ['as' => 'calendar', 'uses' => 'MainController@calendar']);

// do nowej glownej
Route::get('/about', ['as' => 'news', 'uses' => 'MainController@about']);
Route::get('/contact', ['as' => 'news', 'uses' => 'MainController@contact']);
Route::get('/gallery', ['as' => 'news', 'uses' => 'MainController@gallery']);
Route::get('/law', ['as' => 'news', 'uses' => 'MainController@history']);
Route::get('/download', ['as' => 'main.gallery', 'uses' => 'MainController@gallery']);



// dd('cos');
//Route::filter('auth', function(){
//    if (!Auth::check())
//    {
//        return Redirect::to('login');
//    }
//
//});

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

