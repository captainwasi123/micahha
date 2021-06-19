<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\collectibles\products;
use App\Models\collectibles\categories;
use App\Models\collectibles\subCategories;
use App\Models\collectibles\wishlist;
use Auth;

class collectiblesController extends Controller
{
    //
    function index(){
        $data = products::where('status', '1')->latest()->limit(10)->get();
        $categories = categories::orderBy('name')->get();

        return view('web.collectibles.index', ['data' => $data, 'categories' => $categories]);
    }

    function details($id, $title){
        $id = base64_decode($id);
        $data = products::find($id);
        $similar = products::where('cat_id', $data->cat_id)->where('status', '1')->limit(3)->get();

        return view('web.collectibles.details', ['data' => $data, 'similar' => $similar]);
    }
    function getProductByCategory($category){
        $cat = categories::where('name', $category)->first();
        if(!empty($cat->id)){
            $data = products::where('status', '1')
                            ->where('cat_id', $cat->id)
                            ->orderBy('created_at', 'desc')
                            ->paginate(12);
            $categories = categories::orderBy('name')->get();

            return view('web.collectibles.all', ['data' => $data, 'categories' => $categories]);
        }else{
            return redirect(route('collectibles'));
        }
    }
    function getProductBySubCategory($category, $subcategory){
        $cat = subCategories::where('name', $subcategory)->first();
        if(!empty($cat->id)){
            $data = products::where('status', '1')
                            ->where('sub_cat_id', $cat->id)
                            ->orderBy('created_at', 'desc')
                            ->paginate(12);
            $categories = categories::orderBy('name')->get();

            return view('web.collectibles.all', ['data' => $data, 'categories' => $categories]);
        }else{
            return redirect(route('collectibles'));
        }
    }

    function addWishlist($id){
        if(Auth::check()){
            $id = base64_decode($id);
            $w = new wishlist;
            $w->product_id = $id;
            $w->user_id = Auth::id();
            $w->save();
        }else{
            return redirect()->back();
        }
    }
}
