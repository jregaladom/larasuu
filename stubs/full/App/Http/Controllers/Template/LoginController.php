<?php

namespace App\Http\Controllers\Template;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('/auth/login');
    }
}
