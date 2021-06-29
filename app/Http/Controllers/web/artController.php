<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\art\categories;
use App\Models\art\products;

class artController extends Controller
{
    //
    function index(){
        $cat = categories::orderBy('name')->get();
        $data = products::where('status', '1')->latest()->limit(6)->get();

        return view('web.art.index', ['cat' => $cat, 'data' => $data]);
    }

    function all(){
        $data = products::where('status', '1')->latest()->paginate(30);

        return view('web.art.all', ['data' => $data]);
    }
    function category($category){
        $cat = categories::where('name', $category)->first();
        if(!empty($cat->id)){
            $data = products::where('status', '1')->where('category_id', $cat->id)->latest()->paginate(30);

            return view('web.art.all', ['data' => $data, 'is_cat' => $cat->name]);
        }else{
            return redirect()->back();
        }
    }

    function details($id){
        $id = base64_decode($id);
        $data = products::where('id', $id)->where('status', '1')->first();

        $similar = products::where('status', '1')->whereNotIn('id', [$id])->where('category_id', $data->category_id)->latest()->limit(3)->get();

        return view('web.art.details', ['data' => $data, 'similar' => $similar]);
    }
}
