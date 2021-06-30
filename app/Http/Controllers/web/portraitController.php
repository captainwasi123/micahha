<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class portraitController extends Controller
{
    //
    function index(){

        return view('web.portrait.index');
    }
}
