<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\invoice\orders;
use App\Models\saleSetting;
use Auth;

class ordersController extends Controller
{
    //
    function new(){
        $data = orders::where(['seller_id' => Auth::id(), 'status' => '1'])->latest()->get();

        return view('artist.orders.new', ['data' => $data]);
    }
}
