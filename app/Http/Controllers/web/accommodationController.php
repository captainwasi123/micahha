<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\listing;

class accommodationController extends Controller
{
    //
    function index(){
        $data = array(
            'rendom_list' => listing::where('status',2)->inRandomOrder()->limit(3)->get(),
            'list_data' => listing::where('status',2)->latest()->limit(6)->get(),
          ); 
        return view('web.accommodation.index')->with($data);
    }

    function all(){

        $data = array(
            'rendom_list' => listing::where('status',2)->inRandomOrder()->limit(3)->get(),
            'list_data' => listing::where('status',2)->latest()->paginate(6),
        );
        return view('web.accommodation.all')->with($data);;
    }

    public function details(Request $request)
    {
        $list_id =  base64_decode($request->id);
        $data = array(
            'rendom_list' => listing::where('status',2)->where('id','!=',$list_id)->inRandomOrder()->limit(3)->get(),
            'list_data' => listing::where('status',2)->where('id',$list_id)->first(),
        );
        return view('web.accommodation.details')->with($data);
    }
}
