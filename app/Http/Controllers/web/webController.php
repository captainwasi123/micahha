<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\accommodation\listing;
use App\Models\art\products;
use App\Models\collectibles\products as Cproducts;
use App\Models\saleSetting;

class webController extends Controller
{
    //
    function index(){
        $data = array(
            'list_data' => listing::where('status',2)->latest()->limit(6)->get(),
            'product_data' => products::where('status',1)->latest()->limit(6)->get(),
            'cproduct_data' => Cproducts::where('status',1)->latest()->limit(4)->get(),
        );
        // dd($data);
        return view('web.index')->with($data);
    }
    function contact(){
        return view('web.contact');
    }
    function terms(){
        return view('web.terms');
    }
    function policy(){
        return view('web.policy');
    }

    function cart(){
        $saleSetting = saleSetting::first();

        return view('web.cart', ['saleSetting' => $saleSetting]);
    }
}
