<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accommodationController extends Controller
{
    //

	function statistics(){

		return view('admin.accommodation.statistics');
	}


	//Listings

		function pendingListing(){

			return view('admin.accommodation.listings.pending');
		}

		function publishedListing(){

			return view('admin.accommodation.listings.published');
		}

		function rejectedListing(){

			return view('admin.accommodation.listings.rejected');
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


	//Inquiries

		function inquiries(){

			return view('admin.accommodation.inquiries.index');
		}
}
