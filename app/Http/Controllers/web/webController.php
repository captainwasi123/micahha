<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\accommodation\listing;

class webController extends Controller
{
    //
    function index(){
        $data = array(
            'listing' => listing::where('status',2)->latest()->get(),
        );
        // dd($data);
        return view('web.index')->with($data);
    }
}
