<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class artistController extends Controller
{
    //
    function index(){

        return view('artist.index');
    }
}
