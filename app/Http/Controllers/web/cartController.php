<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\collectibles\products;
use App\Models\art\products as ArtProducts;
use Session;

class cartController extends Controller
{
    //Collectibles
        function addItemColl($id){
            $id = base64_decode($id);
            $product = products::where('id',$id)->where('status', '1')->first();
            if(!$product) {
                return response()->json(['status' => 'error', 'message' => 'Product not found.']);
            }
            $cart = session()->get('cart');
            
            if(!$cart) {
                $cart = [
                    '0'.$id => [
                        "type" => 'Collectibles',
                        "id"    => base64_encode($product->id),
                        "title" => $product->title,
                        "by"    => 'Micahha',
                        "seller" => 0,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => 'products/feature/'.$product->feature_img
                    ]
                ];
            
                session()->put('cart', $cart);
                
                return response()->json(['status' => 'success', 'message' => 'Product added.', 'item' => '1']);
            }
            
            if(isset($cart['0'.$id])) {
                
                $cart['0'.$id]['quantity']++;
                session()->put('cart', $cart);

                return response()->json(['status' => 'success', 'message' => 'Product added.', 'item' => '0']);
            }

            $cart['0'.$id] = [
                "type" => 'Collectibles',
                "id"    => base64_encode($product->id),
                "title" => $product->title,
                "by"    => 'Micahha',
                "seller" => 0,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => 'products/feature/'.$product->feature_img
            ];

            session()->put('cart', $cart);
            
            return response()->json(['status' => 'success', 'message' => 'Product added.', 'item' => '1']);

        }

    //Art
        function addItemArt($id){
            $id = base64_decode($id);
            $product = ArtProducts::where('id',$id)->where('status', '1')->first();
            if(!$product) {
                return response()->json(['status' => 'error', 'message' => 'Product not found.']);
            }
            $cart = session()->get('cart');
            
            if(!$cart) {
                $cart = [
                    '1'.$id => [
                        "type" => 'Art',
                        "id"    => base64_encode($product->id),
                        "title" => $product->title,
                        "by"    => $product->artist->first_name,
                        "seller" => $product->artist_id,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => 'art/main/'.$product->image
                    ]
                ];
            
                session()->put('cart', $cart);
                
                return response()->json(['status' => 'success', 'message' => 'Product added.', 'item' => '1']);
            }
            
            if(isset($cart['1'.$id])) {
                
                $cart['1'.$id]['quantity']++;
                session()->put('cart', $cart);

                return response()->json(['status' => 'success', 'message' => 'Product added.', 'item' => '0']);
            }

            $cart['1'.$id] = [
                "type" => 'Art',
                "id"    => base64_encode($product->id),
                "title" => $product->title,
                "by"    => $product->artist->first_name,
                "seller" => $product->artist_id,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => 'art/main/'.$product->image
            ];

            session()->put('cart', $cart);
            
            return response()->json(['status' => 'success', 'message' => 'Product added.', 'item' => '1']);

        }

    function removeItem($id){
        $id = base64_decode($id);
        Session::forget('cart.' . $id);

        return 'success';
    }  


    function plusMinusItem($type,$method, $id){
        $cart = session()->get('cart');
        if(isset($cart[$method.$id])){
            if($type == 'plus') {
                $cart[$method.$id]['quantity']++;
            }else{
                $cart[$method.$id]['quantity']--;
            }
            session()->put('cart', $cart);
            return response()->json(['status' => 'success']);
        }
    }  
}
