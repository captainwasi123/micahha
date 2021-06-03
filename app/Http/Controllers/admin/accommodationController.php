<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\listing;
use App\Models\User;

class accommodationController extends Controller
{
    //

	function statistics(){

		return view('admin.accommodation.statistics');
	}


	//Listings

		function pendingListing(){
			$data = listing::where('status', '1')->orderBy('id', 'desc')->get();

			return view('admin.accommodation.listings.pending', ['data' => $data]);
		}
		function publishedListing(){
			$data = listing::where('status', '2')->orderBy('id', 'desc')->get();

			return view('admin.accommodation.listings.published', ['data' => $data]);
		}
		function rejectedListing(){
			$data = listing::where('status', '3')->orderBy('id', 'desc')->get();

			return view('admin.accommodation.listings.rejected', ['data' => $data]);
		}

		function detailListing($id){
			$id = base64_decode($id);
			$data = listing::find($id);

			return view('admin.accommodation.listings.details', ['data' => $data]);
		}


	//Bookings

		function pendingBooking(){

			return view('admin.accommodation.booking.pending');
		}
		function completedBooking(){

			return view('admin.accommodation.booking.completed');
		}
		function cancelledBooking(){

			return view('admin.accommodation.booking.cancelled');
		}


	//Members

		function pendingMembers(){
			$data = User::where(['user_type' => '2', 'status' => '0'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.pending', ['data' => $data]);
		}
		function approvedMembers(){
			$data = User::where(['user_type' => '2', 'status' => '1'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.approved', ['data' => $data]);
		}
		function rejectedMembers(){
			$data = User::where(['user_type' => '2', 'status' => '2'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.rejected', ['data' => $data]);
		}
		function blockedMembers(){
			$data = User::where(['user_type' => '2', 'status' => '3'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.blocked', ['data' => $data]);
		}

		function profileMembers($id){
			$id = base64_decode($id);
			$data = User::find($id);

			return view('admin.accommodation.members.profile', ['data' => $data]);
		}

		function approveMember($id){
			$id = base64_decode($id);
			$u = User::find($id);
			$u->status = '1';
			$u->save();

			return redirect()->back()->with('success', 'Member Approved.');
		}
		function rejectMember($id){
			$id = base64_decode($id);
			$u = User::find($id);
			$u->status = '2';
			$u->save();

			return redirect()->back()->with('success', 'Member Rejected.');
		}
		function blockMember($id){
			$id = base64_decode($id);
			$u = User::find($id);
			$u->status = '3';
			$u->save();

			return redirect()->back()->with('success', 'Member Blocked.');
		}


	//Inquiries

		function inquiries(){

			return view('admin.accommodation.inquiries.index');
		}
}
