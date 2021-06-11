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
            'list_data' => listing::where('status',2)->latest()->limit(3)->get(),
        );
        // dd($data);
        return view('web.index')->with($data);
    }
}
