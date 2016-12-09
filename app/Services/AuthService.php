<?php
namespace App\Services;

use User;

final class AuthService
{

    function __construct()
    {
    }

    public function register($input)
    {
        User::create([
            'email' => $input['email'],
            'password' => \Hash::make($input['password']),
            'user_type' => isset($input['user_type']) ? $input['user_type'] : 'regular'
        ]);
    }
}