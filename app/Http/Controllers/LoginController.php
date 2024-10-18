<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller 
{
    public function index() 
    {
        return view ('partials/login');
    }

    public function contact() 
    {
        return view ('partials/contact');
    }

    public function register() 
    {
        return view ('partials/register');
    }

}
