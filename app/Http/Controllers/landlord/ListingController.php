<?php

namespace App\Http\Controllers\landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function add_listing(){
    	$data = array('title' => 'Add Listing');
    	return view('landlord.listing.add_listing')->with($data);
    }
    public function pending_listing()
    {
    	$data = array('title' => 'Pending Listing');
    	return view('landlord.listing.pending_listing')->with($data);
    }
    public function published_listing()
    {
    	$data = array('title' => 'Published Listing');
    	return view('landlord.listing.published_listing')->with($data);
    }
    public function rejected_listing()
    {
    	$data = array('title' => 'Rejected Listing');
    	return view('landlord.listing.rejected_listing')->with($data);
    }
    public function listing_details()
    {
    	$data = array('title' => 'Listing Details');
    	return view('landlord.listing.listing_details')->with($data);
    }
    
}
