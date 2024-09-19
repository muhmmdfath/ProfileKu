<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function register(): string
    {
        return view('auth/register');
    }

    public function myprofile(): string
    {
        return view('user/index');
    }

    public function profile()
    {
        $data = [
            'title' => 'My Profile'
        ];
        echo view('user/dashboard', $data);
        // return view('user/dashboard');
    }
}
