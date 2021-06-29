<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\art\withdraw;

class withdrawController extends Controller
{
    //
    function request(){
        $balance = empty(Auth::user()->wallet) ? '0' : Auth::user()->wallet->balance;
        if($balance > 0){
            withdraw::addWithdraw(Auth::id());

            return response()->json(['status' => '200', 'message' => 'Withdraw Request Sent.']);
        }else{
            return response()->json(['status' => '100', 'message' => 'Insufficient Balance']);
        }
    }

    function history(){
        $data = withdraw::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);

        return view('artist.withdraw.history', ['data' => $data]);
    }
}
