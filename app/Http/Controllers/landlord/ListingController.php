<?php

namespace App\Http\Controllers\landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;
use App\Models\accommodation\amenities;
use App\Models\accommodation\propertyType;
use App\Models\accommodation\listing;
use App\Models\accommodation\listingGallery;
use App\Models\accommodation\listingAmenities; 
use App\Models\accommodation\listingAddress;
use Auth;

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
                $gid = listingGallery::addGalleryImage($id, $filename);
                $filename = $gid.'-'.$filename;
                $image->move(base_path('/public/storage/listing/gallery/'), $filename);
            }
        }

        return redirect()->back()->with('success', 'Listing Created. Please wait for admin approval.');
    }
    public function delete_list(Request $request)
    {
        $id = base64_decode($request->id);
        listing::where('id',$id)->delete();
        listingGallery::where('accom_id',$id)->delete();
        listingAmenities::where('accom_id',$id)->delete(); 
        listingAddress::where('accommodation_id',$id)->delete();
        return redirect()->back()->with('success', 'Listing Deleted.');
    }
    public function edit_list(Request $request)
    { 
        $id = base64_decode($request->id); 
        $data = array(
            'title' => 'Edit Listing',
            'listing_data' => listing::where('landlord_id',Auth::id())->where('id',$id)->first(),
            'countries' => country::all(),
            'amenities' => amenities::orderBy('name')->get(),
            'propertyType' => propertyType::orderBy('name')->get()
        ); 
    	return view('landlord.listing.edit_listing')->with($data);
    }
    public function update_list(Request $request)
    {   
        $data = $request->all();
        listingAmenities::where('accom_id',$data['list_id'])->delete();
        if(isset($request->img_id)){
            listingGallery::whereIn('id',$request->img_id)->delete();
        }
        $id = listing::editListing($data);
        if (isset($request->main_img) && $request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/listing/main/'), $filename);
            listing::addFeatureImage($id, $filename);
        }
        if(isset($request->fileUpload) && $request->hasfile('fileUpload'))
        {

            foreach($request->file('fileUpload') as $image)
            {
                $filename = date('dmyHis').'.'.$image->getClientOriginalExtension();
                $gid = listingGallery::addGalleryImage($id, $filename);
                $filename = $gid.'-'.$filename;
                $image->move(base_path('/public/storage/listing/gallery/'), $filename);
            }
        }

        return redirect()->back()->with('success', 'Listing Updated. Please wait for admin approval.');
    }

    public function pending_listing()
    {
    	$data = array(
            'title' => 'Pending Listing',
            'listing_data' => listing::where('landlord_id',Auth::id())->where('status',1)->latest()->paginate(10),
        );
    	return view('landlord.listing.pending_listing')->with($data);
    }
    public function approved_listing()
    {
    	$data = array(
            'title' => 'Approved Listing',
            'listing_data' => listing::where('landlord_id',Auth::id())->where('status',4)->latest()->paginate(10),
        );
    	return view('landlord.listing.approved_listing')->with($data);
    }
    public function published_listing()
    {
    	$data = array(
            'title' => 'Published Listing',
            'listing_data' => listing::where('landlord_id',Auth::id())->where('status',2)->latest()->paginate(10),
        );
    	return view('landlord.listing.published_listing')->with($data);
    }
    public function rejected_listing()
    {
    	$data = array(
            'title' => 'Rejected Listing',
            'listing_data' => listing::where('landlord_id',Auth::id())->where('status',3)->latest()->paginate(10),
        );
    	return view('landlord.listing.rejected_listing')->with($data);
    }
    public function listing_details()
    {
    	$data = array('title' => 'Listing Details');
    	return view('landlord.listing.listing_details')->with($data);
    }
    
}
