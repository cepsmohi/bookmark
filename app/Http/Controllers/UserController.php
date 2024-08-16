<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile()
    {
        return view('users');
    }
    public function password()
    {
        return view('users');
    }
}
