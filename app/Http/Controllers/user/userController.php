<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\coupons;
use Auth;

class userController extends Controller
{
    //
    function index(){

        return view('user.index');
    }

    //Refer
        function refer(){
            $coupons = coupons::where('user_id', Auth::id())->orderBy('status')->get();

            return view('user.refer.index', ['coupons' => $coupons]);
        }

    //Become a Landlord
        function becomeLandlord(){
            $user = User::find(Auth::id());
            $user->landlord_type = $user->landlord_type == '0' ? '1' : $user->landlord_type;
            $user->save();

            return redirect()->back();
        }

    //Become a Artist
        function becomeArtist(){
            $user = User::find(Auth::id());
            $user->artist_type = $user->artist_type == '0' ? '1' : $user->artist_type;
            $user->save();

            return redirect()->back();
        }
}
