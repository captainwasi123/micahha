<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\art\orders as PortOrders;
use App\Models\saleSetting;

class portraitOrderController extends Controller
{
    //
    function new(){
        $sales = saleSetting::first();
        $data = PortOrders::where('status', '1')->orderBy('id', 'desc')->get();

        return view('artist.portrait_orders.new', ['data' => $data, 'com' => $sales->commission]);
    }
    function processing(){
        $sales = saleSetting::first();
        $data = PortOrders::where('status', '2')->orderBy('id', 'desc')->get();

        return view('artist.portrait_orders.processing', ['data' => $data, 'com' => $sales->commission]);
    }
    function delivered(){
        $sales = saleSetting::first();
        $data = PortOrders::where('status', '3')->orderBy('id', 'desc')->get();

        return view('artist.portrait_orders.delivered', ['data' => $data, 'com' => $sales->commission]);
    }

    function details($id){
        $id = base64_decode($id);
        $data = PortOrders::where('id', $id)->first();

        return view('artist.portrait_orders.details', ['data' => $data]);
    }

    function process($id){
        $id = base64_decode($id);
        $data = PortOrders::where('status', '1')->where('id', $id)->first();
        if(!empty($data->id)){
            $data->status = '2';
            $data->save();
            return redirect()->back()->with('success', 'Portrait Status Updated.');
        }else{
            return redirect()->back();
        }

    }

    function deliver($id){
        $id = base64_decode($id);
        $data = PortOrders::where('status', '2')->where('id', $id)->first();

        return view('artist.portrait_orders.deliver', ['data' => $data]);
    }

    function deliverSubmit(Request $request){
        $data = $request->all();
        $id = base64_decode($data['oid']);
        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/art/order_attachment/art/'), $filename);

            $o = PortOrders::find($id);
            $o->art_file = $filename;
            $o->status = '3';
            $o->save();
        }
        return redirect()->back()->with('success', 'Portrait Status Updated.');
    }
}
