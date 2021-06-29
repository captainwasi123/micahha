<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\saleSetting;
use App\Models\country;
use App\Models\collectibles\products;
use App\Models\art\products as ArtProducts;
use App\Models\invoice\masterInvoice;

class checkoutController extends Controller
{
    //
    function index(){
        $countries = country::all();
        $saleSetting = saleSetting::first();

        return view('web.checkout', ['saleSetting' => $saleSetting, 'countries' => $countries]);
    }

    function checkout(Request $request){
        $delivery = $request->all();

        $saleSetting = saleSetting::first();
        $cart = session()->get('cart');
        $data = array('subtotal' => 0, 'gst' => $saleSetting->gst);
        foreach($cart as $key => $val){
            $i = isset($data['product'][$val['seller']]['item']) ? count($data['product'][$val['seller']]['item']) : 0;
            $data['product'][$val['seller']]['item'][$i]['id'] = $val['id'];
            $data['product'][$val['seller']]['item'][$i]['qty'] = $val['quantity'];
            if($val['by'] == 'Micahha'){
                $product = products::find(base64_decode($val['id']));
                $data['product'][$val['seller']]['item'][$i]['price'] = $product->price;
                $data['subtotal'] += $product->price*$val['quantity'];
                $data['product'][$val['seller']]['total'] = (isset($data['product'][$val['seller']]['total']) ? $data['product'][$val['seller']]['total'] : 0) + $product->price*$val['quantity'];
                $data['product'][$val['seller']]['seller'] = (isset($data['product'][$val['seller']]['seller']) ? $val['seller'] : 0);
            }else{
                $product = ArtProducts::find(base64_decode($val['id']));
                $data['product'][$val['seller']]['item'][$i]['price'] = $product->price;
                $data['subtotal'] += $product->price*$val['quantity'];
                $data['product'][$val['seller']]['total'] = (isset($data['product'][$val['seller']]['total']) ? $data['product'][$val['seller']]['total'] : 0) + $product->price*$val['quantity'];
                $data['product'][$val['seller']]['seller'] = (isset($data['product'][$val['seller']]['seller']) ? $val['seller'] : 0);
            }
        }

        //dd($data);
        $invoice_id = masterInvoice::addInvoice($data, $delivery);
        session()->flush('cart');

        return redirect(route('web.cart'))->with('success', 'Order successful. Order#'.$invoice_id);
    }
}
