<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class generalController extends Controller
{
    //
    function users(){
        $data = User::where('status', '1')->latest()->get();
        
        return view('admin.general.users', ['data' => $data]);
    }
}
