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
		return Redirect::to('');
	}
}