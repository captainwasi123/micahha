<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\wishlist as accomWishlist;
use App\Models\collectibles\wishlist as collWishlist;
use Auth;

class wishlistController extends Controller
{
    //Accommodation
    function accomList(){
        $data = accomWishlist::where('user_id', Auth::id())->get();

        return view('user.wishlist.accommodation.list', ['data' => $data]);
    }
    function accomListremove($id){
        $id = base64_decode($id);

        accomWishlist::destroy($id);

        return redirect()->back()->with('success', 'Removed from wishlist.');
    }


    //Collectibles
    function collList(){
        $data = collWishlist::where('user_id', Auth::id())->get();

        return view('user.wishlist.collectibles.list', ['data' => $data]);
    }
    function collListremove($id){
        $id = base64_decode($id);

        collWishlist::destroy($id);

        return redirect()->back()->with('success', 'Removed from wishlist.');
    }

}
