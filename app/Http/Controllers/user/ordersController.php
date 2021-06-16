<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\reservation;
use Auth;

class ordersController extends Controller
{
    //Accommodation
    function accommodationPending(){
        $data = reservation::where('reserved_by', Auth::id())
                            ->where('status', '0')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('user.orders.accommodation.pending', ['data' => $data]);
    }
    function accommodationActive(){
        $data = reservation::where('reserved_by', Auth::id())
                            ->where('status', '1')
                            ->where('customer_status', '!=', '2')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('user.orders.accommodation.active', ['data' => $data]);
    }
    function accommodationHistory(){
        $data = reservation::where('reserved_by', Auth::id())
                            ->orderBy('id', 'desc')
                            ->get();
        return view('user.orders.accommodation.history', ['data' => $data]);
    }

    function accommodationCancel($id){
        $id = base64_decode($id);
        $data = reservation::find($id);
        $data->status = '3';
        $data->save();

        return redirect()->back()->with('success', 'Booking canceled.');
    }
}
