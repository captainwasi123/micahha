<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\listing;

class accommodationController extends Controller
{
    //

	function statistics(){

		return view('admin.accommodation.statistics');
	}


	//Listings

		function pendingListing(){
			$data = listing::where('status', '1')->get();

			return view('admin.accommodation.listings.pending', ['data' => $data]);
		}
		function publishedListing(){

			return view('admin.accommodation.listings.published');
		}
		function rejectedListing(){

			return view('admin.accommodation.listings.rejected');
		}

		function detailListting(){

			return view('admin.accommodation.listings.details');
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

			return view('admin.accommodation.members.pending');
		}
		function approvedMembers(){

			return view('admin.accommodation.members.approved');
		}
		function rejectedMembers(){

			return view('admin.accommodation.members.rejected');
		}

		function profileMembers(){

			return view('admin.accommodation.members.profile');
		}


	//Inquiries

		function inquiries(){

			return view('admin.accommodation.inquiries.index');
		}
}
