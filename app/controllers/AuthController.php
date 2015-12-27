<?php

use App\Services\AuthService;


class AuthController extends \BaseController {

	public $auth;

	public function __construct(AuthService $auth)
	{
		$this->auth = $auth;
	}

	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
	{
		$input = Input::only('email', 'password');
		if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
		{
		    return Redirect::intended('home');
		}
		return Redirect::to('/')->with('message', 'Podano zły login lub hasło.');
	}
	public function getRegister()
	{
		return View::make('auth.register');
	}
	public function postRegister()
	{
		$this->auth->register(Input::only('email', 'password'));
		return View::make('auth.login')->with('message', 'Rejestracja przebiegła pomyślnie');
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function getUserAvatar()
	{
		$name = Auth::getUser()->avatar->path;
		return asset($name);
	}
	public function profile()
	{
		return \View::make('auth.profile')->with('user', Auth::getUser());
	}
	public function postProfile()
	{
		$data = \Input::all();
		$file_id = Auth::getUser()->avatar_id;

		if(Input::hasFile('avatar')){
			$path = \Config::get('paths.upload');
			$name = \Input::file('avatar')->getClientOriginalName();
			$mime = 'jpg';
			$size = \Input::file('avatar')->getSize();
			$file = \Input::file('avatar')->move($path, $name);
			$filePath = $file->getRealPath();
			$file = Photo::create(['mime_type' => $mime, 'size' => $size, 'path' => $path.$name]);
			$file_id = $file->id;
		}
		if(!$data['nick']) {
			$data['nick'] = Auth::getUser()->nick;
		}

		Auth::getUser()->update(['avatar_id' => $file_id, 'nick' => $data['nick']]);
		return Redirect::action('HomeController@home');
	}
}