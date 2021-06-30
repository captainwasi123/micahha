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
    function history(){
        $data = orders::where('seller_id', Auth::id())->whereIn('status', ['2', '3'])->latest()->get();

        return view('artist.orders.history', ['data' => $data]);
    }

    function process($id){
        $id = base64_decode($id);
        $o = orders::find($id);
        $o->status = '2';
        $o->save();

        return redirect()->back()->with('success', 'Order Processed.');
    }
}
