<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\collectibles\products;

class collectiblesController extends Controller
{
    //
    function index(){
        $data = products::where('status', '1')->latest()->limit(10)->get();

        return view('web.collectibles.index', ['data' => $data]);
    }

    function details($id, $title){
        $id = base64_decode($id);
        $data = products::find($id);

        return view('web.collectibles.details', ['data' => $data]);
    }
}
