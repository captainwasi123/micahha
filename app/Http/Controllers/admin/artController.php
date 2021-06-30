<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\art\products;
use App\Models\art\portfolio;
use App\Models\art\withdraw;
use App\Models\invoice\orders;
use App\Models\saleSetting;

class artController extends Controller
{


    //Listings

        function pendingProduct(){
            $data = products::where('status', '0')->orderBy('id', 'desc')->get();

            return view('admin.art.products.pending', ['data' => $data]);
        }
        function publishedProduct(){
            $data = products::where('status', '1')->orderBy('id', 'desc')->get();

            return view('admin.art.products.published', ['data' => $data]);
        }
        function rejectedProduct(){
            $data = products::where('status', '2')->orderBy('id', 'desc')->get();

            return view('admin.art.products.rejected', ['data' => $data]);
        }

        function detailProduct($id){
            $id = base64_decode($id);
            $data = products::find($id);

            return view('admin.art.products.details', ['data' => $data]);
        }

        function approveProduct($id){
            $id = base64_decode($id);
            $u = products::find($id);
            $u->status = '1';
            $u->save();

            return redirect()->back()->with('success', 'Product Published.');
        }
        function rejectProduct($id){
            $id = base64_decode($id);
            $u = products::find($id);
            $u->status = '2';
            $u->save();

            return redirect()->back()->with('success', 'Product Rejected.');
        }

    //Portfolio

        function pendingPortfolio(){
            $data = portfolio::where('status', '0')->orderBy('id', 'desc')->get();

            return view('admin.art.portfolio.pending', ['data' => $data]);
        }
        function publishedPortfolio(){
            $data = portfolio::where('status', '1')->orderBy('id', 'desc')->get();

            return view('admin.art.portfolio.published', ['data' => $data]);
        }
        function rejectedPortfolio(){
            $data = portfolio::where('status', '2')->orderBy('id', 'desc')->get();

            return view('admin.art.portfolio.rejected', ['data' => $data]);
        }

        function approvePortfolio($id){
            $id = base64_decode($id);
            $u = portfolio::find($id);
            $u->status = '1';
            $u->save();

            return redirect()->back()->with('success', 'Portfolio Published.');
        }
        function rejectPortfolio($id){
            $id = base64_decode($id);
            $u = portfolio::find($id);
            $u->status = '2';
            $u->save();

            return redirect()->back()->with('success', 'Portfolio Rejected.');
        }



    //Members

        function pendingMembers(){
            $data = User::where(['artist_type' => '1'])->orderBy('id', 'desc')->get();

            return view('admin.art.members.pending', ['data' => $data]);
        }
        function approvedMembers(){
            $data = User::where(['artist_type' => '2'])->orderBy('id', 'desc')->get();

            return view('admin.art.members.approved', ['data' => $data]);
        }
        function rejectedMembers(){
            $data = User::where(['artist_type' => '3'])->orderBy('id', 'desc')->get();

            return view('admin.art.members.rejected', ['data' => $data]);
        }
        function blockedMembers(){
            $data = User::where(['artist_type' => '4'])->orderBy('id', 'desc')->get();

            return view('admin.art.members.blocked', ['data' => $data]);
        }

        function profileMembers($id){
            $id = base64_decode($id);
            $data = User::find($id);

            return view('admin.art.members.profile', ['data' => $data]);
        }

        function approveMember($id){
            $id = base64_decode($id);
            $u = User::find($id);
            $u->artist_type = '2';
            $u->save();

            return redirect()->back()->with('success', 'Member Approved.');
        }
        function rejectMember($id){
            $id = base64_decode($id);
            $u = User::find($id);
            $u->artist_type = '3';
            $u->save();

            return redirect()->back()->with('success', 'Member Rejected.');
        }
        function blockMember($id){
            $id = base64_decode($id);
            $u = User::find($id);
            $u->artist_type = '4';
            $u->save();

            return redirect()->back()->with('success', 'Member Blocked.');
        }


    //Orders

        function newOrders(){
            $sales = saleSetting::first();
            $data = orders::where('seller_id', '!=', '0')->where('status', '1')->orderBy('id', 'desc')->get();

            return view('admin.art.orders.new', ['data' => $data, 'com' => $sales->commission]);
        }


        function processingOrders(){
            $sales = saleSetting::first();
            $data = orders::where('seller_id', '!=', '0')->where('status', '2')->orderBy('id', 'desc')->get();

            return view('admin.art.orders.processing', ['data' => $data, 'com' => $sales->commission]);
        }
        function deliveredOrders(){
            $sales = saleSetting::first();
            $data = orders::where('seller_id', '!=', '0')->where('status', '3')->orderBy('id', 'desc')->get();

            return view('admin.art.orders.delivered', ['data' => $data, 'com' => $sales->commission]);
        }

      

    //Withdraw

        function newWithdraw(){
            $data = withdraw::where('status', '0')->latest()->get();
            return view('admin.art.withdraw.new', ['data' => $data]);
        }


        function paidWithdraw(){
            $data = withdraw::where('status', '1')->latest()->get();
            return view('admin.art.withdraw.paid', ['data' => $data]);
        }
        function holdWithdraw(){
            $data = withdraw::where('status', '2')->latest()->get();
            return view('admin.art.withdraw.hold', ['data' => $data]);
        }


        function markPaidWithdraw($id){
            $id = base64_decode($id);
            $data = withdraw::find($id);
            $data->status = '1';
            $data->save();

            return redirect()->back()->with('success', 'Withdraw marked as paid.');
        }
        function markHoldWithdraw($id){
            $id = base64_decode($id);
            $data = withdraw::find($id);
            $data->status = '2';
            $data->save();

            return redirect()->back()->with('success', 'Withdraw marked as hold.');
        }

}
