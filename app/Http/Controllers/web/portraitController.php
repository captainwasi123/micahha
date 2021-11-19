<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\art\portfolio;
use App\Models\art\portraitType;
use App\Models\art\orders;
use App\Models\art\wallet;
use App\Models\saleSetting;
class portraitController extends Controller
{
    //
    function index(){
        $data = portfolio::where('status', '1')->latest()->paginate(30);
        $type = portraitType::orderBy('name')->get();

        return view('web.portrait.index', ['data' => $data, 'type' => $type]);
    }
    function category($category){
        $pt = portraitType::where('name', $category)->first();
        if(!empty($pt->id)){
            $data = portfolio::where('status', '1')->where('type', $pt->id)->latest()->paginate(30);
            $type = portraitType::orderBy('name')->get();

            return view('web.portrait.index', ['data' => $data, 'type' => $type, 'portraitType' => $category]);
        }else{
            return redirect()->back();
        }
    }

    function details($id, $name){
        $id = base64_decode($id);
        $data = portfolio::where('status', '1')->where('id', $id)->first();
        if(!empty($data->id)){
            $similar = portfolio::where('type', $data->type)->where('status', '1')->limit(3)->latest()->get();

            return view('web.portrait.details', ['data' => $data, 'similar' => $similar]);
        }else{
            return redirect()->back();
        }
    }


    function checkout(Request $request){

        $data = $request->all();

        $product = portfolio::find(base64_decode($data['pid']));
        if(!empty($product->id)){
            $returnid = orders::addOrder($data, $product);
            $id = explode('|', $returnid);
            if ($request->hasFile('attachment')) {
                $file = $request->file('attachment');
                $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
                $filename = $id[0].'-'.$filename;
                $file->move(base_path('/public/storage/art/order_attachment/'), $filename);
                orders::addFeatureImage($id[0], $filename);
            }



            return view('web.payments.stripe', ['id'=> $id[0], 'amount' => $id[1], 'type'=>2]);

        }else{
            return redirect()->back();
        }
    }


    function confirmOrder($id){

        $sales = saleSetting::first();
        $o = orders::find($id);
        $o->status = '1';
        $o->save();
     
        $w = wallet::where('user_id', $o->artist_id)->first();
        if(empty($w->id)){
            $wn = new wallet;
            $wn->user_id = $o->artist_id;
            $wn->balance = ($o->price-(($o->price/100)*$sales->commission));
            $wn->save();
        }else{
            $w->balance = $w->balance+($o->price-(($o->price/100)*$sales->commission));
            $w->save();
        }
        session()->forget('cart');
        return redirect(route('home'));
    }
}
