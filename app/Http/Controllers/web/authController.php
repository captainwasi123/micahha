<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;
use App\Models\User;
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
            return redirect()->back()->with('error', 'Authentication Failed.');
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
            'password' => 'required|confirmed|min:6',
        ]);
        User::addUser($data);

        return redirect(route('user.login'))->with('success', 'You are successfully registered.');
    }
}
