<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\reservation;
use App\Models\accommodation\chat;
use App\Models\invoice\orders;
use Auth;

class ordersController extends Controller
{
    //Accommodation
        function accommodationPending(){
            $data = reservation::where('reserved_by', Auth::id())
                                ->where('status', '0')
                                ->orderBy('id', 'desc')
                                ->get();
            return view('user.orders.accommodation.pending', ['data' => $data]);
        }
        function accommodationActive(){
            $data = reservation::where('reserved_by', Auth::id())
                                ->where('status', '1')
                                ->where('customer_status', '!=', '2')
                                ->orderBy('id', 'desc')
                                ->get();
            return view('user.orders.accommodation.active', ['data' => $data]);
        }
        function accommodationHistory(){
            $data = reservation::where('reserved_by', Auth::id())
                                ->orderBy('id', 'desc')
                                ->get();
            return view('user.orders.accommodation.history', ['data' => $data]);
        }

        function accommodationCancel($id){
            $id = base64_decode($id);
            $data = reservation::find($id);
            $data->status = '3';
            $data->save();

            return redirect()->back()->with('success', 'Booking canceled.');
        }


        //Chat

            function chat($id){
                $id = base64_decode($id);
                $order = reservation::find($id);
                $data = chat::where('order_id', $id)->get();

                return view('user.orders.accommodation.chat', ['data' => $data, 'order' => $order]);
            }
            function sendChat(Request $request){
                $data = $request->all();

                $c = new chat;
                $c->order_id = base64_decode($data['order_id']);
                $c->user_id = Auth::id();
                $c->message = $data['message'];
                $c->status = '1';
                $c->save();

                return redirect()->back();
            }



    //Collectibles
        function collectiblesActive(){
            $data = orders::where(['seller_id' => '0', 'buyer_id' => Auth::id()])
                            ->whereIn('status', ['1', '2'])
                            ->latest()->get();

            return view('user.orders.collectibles.active', ['data' => $data]);
        }
        function collectiblesHistory(){
            $data = orders::where(['seller_id' => '0', 'buyer_id' => Auth::id()])
                            ->whereIn('status', ['3', '4'])
                            ->latest()->get();

            return view('user.orders.collectibles.history', ['data' => $data]);
        }



}
