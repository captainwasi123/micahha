<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    //
    function login(){

        return view('web.login');
    }


    function register(){

        return view('web.register');
    }
}
