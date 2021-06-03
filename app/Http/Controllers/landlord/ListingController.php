<?php

namespace App\Http\Controllers\landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;
use App\Models\accommodation\amenities;
use App\Models\accommodation\propertyType;
use App\Models\accommodation\listing;
use App\Models\accommodation\listingGallery;

class ListingController extends Controller
{
    //
    public function add_listing(){
    	$data = array(
            'title' => 'Add Listing',
            'countries' => country::all(),
            'amenities' => amenities::orderBy('name')->get(),
            'propertyType' => propertyType::orderBy('name')->get()
        );
    	return view('landlord.listing.add_listing')->with($data);
    }
    public function insert_listing(Request $request){
        $data = $request->all();
        $id = listing::addListing($data);
        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/listing/main/'), $filename);
            listing::addFeatureImage($id, $filename);
        }
        if($request->hasfile('fileUpload'))
        {

            foreach($request->file('fileUpload') as $image)
            {
                $filename = date('dmyHis').'.'.$image->getClientOriginalExtension();
                $id = listingGallery::addGalleryImage($id, $filename);
                $filename = $id.'-'.$filename;
                $image->move(base_path('/public/storage/listing/gallery/'), $filename);
            }
        }

        return redirect()->back()->with('success', 'Listing Created. Please wait for admin approval.');
    }

    public function pending_listing()
    {
    	$data = array(
            'title' => 'Pending Listing',
            'listing_data' => listing::where('status',1)->latest()->paginate(10),
        );
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
