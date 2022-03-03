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
            $evalid = 0;
            $pvalid = 0;
            $emailCode = $request->get('emailcode');
            $phonecode = $request->get('phonecode');
            $edata=User::Where('id', Auth::id())->where('emailcode',  $emailCode)->first();
            if(!empty($edata->id)){
                $edata->is_verified_email = '1';
                $edata->save();

                $evalid = 1;
            }
            $pdata=User::Where('id', Auth::id())->where('smsacode',  $phonecode)->first();
            if(!empty($pdata->id)){
                $pdata->is_varified_phone = '1';
                $pdata->save();

                $pvalid = 1;
            }
            $message = '';
            if($evalid == 1 && $pvalid == 1){
                return redirect()->back()->with('success', 'Your email & Phone is Verified.');
            }elseif($evalid == 1 && $pvalid == 0){
                return redirect()->back()->with('success', 'Your email is Verified.');
            }elseif($evalid == 0 && $pvalid == 1){
                return redirect()->back()->with('success', 'Your Phone is Verified.');
            }else{
                return redirect()->back()->with('error', 'Invalid Code.');
            }
        }
}
