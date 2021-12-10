<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;
use App\Models\User;
use App\Models\saleSetting;
use App\Models\coupons;
use Auth;
use Mail;
use Carbon\Carbon; 
use Illuminate\Support\Str;
use Hash;
use DB;

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




       
    // forget password

    function showForgetPasswordForm(){

        return view('web.forgetPassword');
    }

    function submitForgetPasswordForm(Request $request){


        $request->validate([
            'email' => 'required|email|exists:tbl_user_info',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        Mail::send('web.mail.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
       
    }

    public function showResetPasswordForm($token) { 


        return view('web.forgetPasswordLink', ['token' => $token]);
     }
     

    public function submitResetPasswordForm(Request $request)
    {
          $request->validate([
          
              'password' => '|required_with:confirmation_password|same:confirmation_password',
              'confirmation_password' => 'required'
          ]);
          $updatePassword = DB::table('password_resets')
                              ->where([ 'token' => $request->token])->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
          $user = User::where('email', $updatePassword->email)
                      ->update(['password' => Hash::make($request->password)]);
          DB::table('password_resets')->where(['email'=> $updatePassword->email])->delete();

          return redirect('login')->with('message', 'Your password has been changed!');

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
