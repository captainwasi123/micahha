<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;
use App\Models\User;
use App\Models\saleSetting;
use App\Models\coupons;
use Auth;

class authController extends Controller
{
    //
    function login(){

        return view('web.login');
    }
    function loginSubmit(Request $request){
        $data = $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => '1'])){

            return redirect('/');
        }else{
            $msg = 'Authentication Failed.';
            $user = User::where('email', $data['email'])->first();
            if(empty($user->id)){
                $msg = 'Authentication Failed.';
            }else{
                if($user->status == '2'){
                    $msg = 'Your account is rejected by admin.';
                }else if($user->status == '0'){
                    $msg = 'Your account is under review. Please wait until admin approval.';
                }else if($user->status == '3'){
                    $msg = 'Your account is blocked by admin.';
                }
            }
            return redirect()->back()->with('error', $msg);
        }
    }

    function logout(){
        Auth::logout();

        return redirect('login')->with('success', 'Successfully logged out.');
    }


    function register(){
        $countries = country::all();

        return view('web.register', ['countries' => $countries]);
    }
    function registerSubmit(Request $request){
        $data = $request->all();
        $validated = $request->validate([
            'email' => 'required|unique:tbl_user_info|max:255',
            'username' => 'required|unique:tbl_user_info|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
        User::addUser($data);
        if($data['refer_by'] != '0'){
            $sales = saleSetting::first();

            $c = new coupons;
            $c->user_id = base64_decode(base64_decode($data['refer_by']));
            $c->amount = $sales->refer_gift;
            $c->status = '0';
            $c->save();
        }
        return redirect(route('user.login'))->with('success', 'You are successfully registered.');
    }
    function registerRefer($id){
        $id = base64_decode(base64_decode($id));
        $u = User::find($id);
        if(!empty($u->id)){

            $countries = country::all();
            return view('web.register', ['countries' => $countries, 'refer_by' => $id]);
        }else{
            return redirect('/');
        }
    }


    function usernameVerify($val){
        $user = User::where('username', $val)->first();
        if(!empty($user->id)){
            return 'taken';
        }else{
            return 'available';
        }
    }
}
