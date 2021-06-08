<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\country;
use Auth;
use Hash;

class SettingController extends Controller
{
    //
    //Edit Profile
    public function profile_edit(){
        $data = array(
            'title' => 'Edit Profile',
            'countries' => country::orderBy('country')->get()
        );
        return view('user.settings.profile_edit')->with($data);
    }
    public function profile_update(Request $request){
        $data = $request->all();

        User::updateProfile($data);
        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = Auth::id().'-'.$filename;
            $file->move(base_path('/public/storage/users/'), $filename);
            
            $u = User::find(Auth::id());
            $u->profile_image = $filename;
            $u->save();
        }
        return redirect()->back()->with('success', 'Profile Updated.');
    }


    //Change Password
    public function change_password()
    {
        $data = array('title' => 'Change Password');
        return view('user.settings.change_password')->with($data);
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'cur_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $data = $request->all();
        $u = User::find(Auth::id());
        if(Hash::check($data['cur_password'], $u->password)) {
            $u->password = bcrypt($data['password']);
            $u->save();
            return redirect()->back()->with('success', 'Password Updated.');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

    }
}
