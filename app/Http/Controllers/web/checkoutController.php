<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\saleSetting;
use App\Models\country;
use App\Models\coupons;
use App\Models\collectibles\products;
use App\Models\art\products as ArtProducts;
use App\Models\invoice\masterInvoice;
use App\Models\invoice\orders;
use App\Models\shippingCountries;
use App\Models\userAddress;
use Auth;

class checkoutController extends Controller
{
    //
    function index(){
        $saleSetting = saleSetting::first();
        $countries = shippingCountries::orderBy('country_id')->get();
        $coupons = coupons::where('user_id', Auth::id())->where('status', '0')->first();

        return view('web.checkout', ['saleSetting' => $saleSetting, 'countries' => $countries, 'coupon' => $coupons]);
    }

    function checkout(Request $request){
        $delivery = $request->all();

        if(!empty($delivery['save_address'])){
            $ua = new userAddress;
            $ua->user_id = Auth::id();
            $ua->country_id = $delivery['country'];
            $ua->address = $delivery['address'];
            $ua->city = $delivery['city'];
            $ua->state = $delivery['state'];
            $ua->postcode = $delivery['post_code'];
            $ua->phone = $delivery['phone'];
            $ua->save();
        }
        $saleSetting = saleSetting::first();
        $cart = session()->get('cart');
        $coupons = coupons::where('user_id', Auth::id())->where('status', '0')->first();
        $discount = 0;
        if(!empty($coupons->id)){
            $discount = $coupons->amount;

            $coupons->status = '1';
            $coupons->save();
        }
        $data = array('subtotal' => 0, 'gst' => 0, 'discount' => $discount);
        foreach($cart as $key => $val){
            $i = isset($data['product'][$val['seller']]['item']) ? count($data['product'][$val['seller']]['item']) : 0;
            $data['product'][$val['seller']]['item'][$i]['id'] = $val['id'];
            $data['product'][$val['seller']]['item'][$i]['qty'] = $val['quantity'];
            $data['product'][$val['seller']]['type'] = $val['type'];
            if($val['type'] == 'Collectibles'){
                $product = products::find(base64_decode($val['id']));
                $data['product'][$val['seller']]['item'][$i]['price'] = $product->price;
                $data['subtotal'] += $product->price*$val['quantity'];
                $data['product'][$val['seller']]['total'] = (isset($data['product'][$val['seller']]['total']) ? $data['product'][$val['seller']]['total'] : 0) + $product->price*$val['quantity'];
                $data['product'][$val['seller']]['seller'] =  $val['seller'];
            }else{
                $product = ArtProducts::find(base64_decode($val['id']));
                $data['product'][$val['seller']]['item'][$i]['price'] = $product->price;
                $data['subtotal'] += $product->price*$val['quantity'];
                $data['product'][$val['seller']]['total'] = (isset($data['product'][$val['seller']]['total']) ? $data['product'][$val['seller']]['total'] : 0) + $product->price*$val['quantity'];
                $data['product'][$val['seller']]['seller'] = $val['seller'];
            }
        }

        $ship = shippingCountries::where('country_id', $delivery['country'])->first();
        $data['gst'] = $data['subtotal'] >= $ship->max_value ? $ship->gst : 0;
        

        //dd($data);
        $invoice_id = masterInvoice::addInvoice($data, $delivery, $discount);
        
        $invoice = explode("|", $invoice_id);
         

      return view('web.payments.stripe', ['id' => $invoice[0], 'amount' => $invoice[1], 'type'=>1]);
    }

    function confirmOrder($id){
        $o = masterInvoice::find($id);
        $o->status = '1';
        $o->save();

        orders::where('invoice_id', $id)->update([
            'status' => '1'
        ]);
        session()->forget('cart');
        return redirect(route('home'));
    }


}
