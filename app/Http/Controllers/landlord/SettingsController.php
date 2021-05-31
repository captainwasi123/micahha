<?php

namespace App\Http\Controllers\landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function profile_edit(){
    	$data = array('title' => 'Edit Profile');
    	return view('landlord.settings.profile_edit')->with($data);
    }

    public function change_password()
    {
        $data = array('title' => 'Change Password');
        return view('landlord.settings.change_password')->with($data);
    }
}
