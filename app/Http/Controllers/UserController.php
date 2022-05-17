<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class UserController extends Controller
{
    public function showWelcomePage()
    {
        return view('welcome');
    }

    public function showSignPage()
    {
        return view('sign');
    }

    public function showLogoutPage()
    {
        return view('sign');
    }
}
