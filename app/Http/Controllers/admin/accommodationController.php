<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\listing;
use App\Models\accommodation\reservation;
use App\Models\User;
use App\Models\Accommodation_Enquiry;

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
		function dueListing(){
			$data = listing::where('status', '4')->orderBy('id', 'desc')->get();

			return view('admin.accommodation.listings.due', ['data' => $data]);
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

		function approveListing($id){
			$id = base64_decode($id);
			$u = listing::find($id);
			$u->status = '4';
			$u->save();

			return redirect()->back()->with('success', 'Lisitng Approved.');
		}
		function rejectListing($id){
			$id = base64_decode($id);
			$u = listing::find($id);
			$u->status = '3';
			$u->save();

			return redirect()->back()->with('success', 'Lisitng Rejected.');
		}


	//Bookings

		function pendingBooking(){
			$data = reservation::where('status', '0')->latest()->get();
			return view('admin.accommodation.booking.pending', ['data' => $data]);
		}
		function approvedBooking(){
			$data = reservation::where('status', '1')->latest()->get();
			return view('admin.accommodation.booking.approved', ['data' => $data]);
		}
		function cancelledBooking(){
			$data = reservation::where('status', '2')->latest()->get();
			return view('admin.accommodation.booking.cancelled', ['data' => $data]);
		}


	//Members

		function pendingMembers(){
			$data = User::where(['landlord_type' => '1'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.pending', ['data' => $data]);
		}
		function approvedMembers(){
			$data = User::where(['landlord_type' => '2'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.approved', ['data' => $data]);
		}
		function rejectedMembers(){
			$data = User::where(['landlord_type' => '3'])->orderBy('id', 'desc')->get();

			return view('admin.accommodation.members.rejected', ['data' => $data]);
		}
		function blockedMembers(){
			$data = User::where(['landlord_type' => '4'])->orderBy('id', 'desc')->get();

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
			$u->landlord_type = '2';
			$u->save();

			return redirect()->back()->with('success', 'Member Approved.');
		}
		function rejectMember($id){
			$id = base64_decode($id);
			$u = User::find($id);
			$u->landlord_type = '3';
			$u->save();

			return redirect()->back()->with('success', 'Member Rejected.');
		}
		function blockMember($id){
			$id = base64_decode($id);
			$u = User::find($id);
			$u->landlord_type = '4';
			$u->save();

			return redirect()->back()->with('success', 'Member Blocked.');
		}


	//Inquiries

		function inquiries(){
			$data = Accommodation_Enquiry::orderBy('created_at', 'desc')->get();

			return view('admin.accommodation.inquiries.index', ['data' => $data]);
		}

		function openInquiries($id){
			$id = base64_decode($id);

			$data = Accommodation_Enquiry::find($id);

			return view('admin.accommodation.inquiries.detail_response', ['data' => $data]);
		}
}
