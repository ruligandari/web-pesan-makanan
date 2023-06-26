<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/index', $data);
    }
}
