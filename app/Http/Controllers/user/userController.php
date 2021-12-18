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

        public function verifyform()
        {
            return view('user.verifycode');
        }

        public function verifyAccountBycode(Request $request)
        {  
            
            
            $data=User::Where('id', Auth::id())->where('emailcode', $request->emailcode )->first();
            $data=User::Where('id', Auth::id())->where('emailcode', $request->emailcode )->Update([

                'is_verified' => 1,

            ]);
        
    

            return redirect()->back()->with('success', 'You account has been Verified');
        }
}
