<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class collectiblesController extends Controller
{
    function statistics(){

        return '';
    }

    //Products

    function addProduct(){

        return view('admin.collectibles.products.new');
    }
    function publishedProduct(){

        return view('admin.collectibles.products.published');
    }
    function draftedProduct(){

        return view('admin.collectibles.products.drafted');
    }


    //Sales

    function newOrders(){

        return view('admin.collectibles.sales.new');
    }
    function processingOrders(){

        return view('admin.collectibles.sales.processing');
    }
    function deliveredOrders(){

        return view('admin.collectibles.sales.delivered');
    }

    function detailOrders(){

        return view('admin.collectibles.sales.orderDetail');
    }

}
