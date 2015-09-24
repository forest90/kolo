<?php
namespace App\Services;
	/**
	* 
	*/
	final class AuthService
	{
		
		function __construct()
		{
		}

		public function register($input)
		{
			\User::create([
				'email' => $input['email'],
				'password' => \Hash::make($input['password'])
			]);
		}
	}