<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accommodationController extends Controller
{
    //
    function index(){

        return view('web.accommodation.index');
    }

    function all(){

        return view('web.accommodation.all');
    }
}
