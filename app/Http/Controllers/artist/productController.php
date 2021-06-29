<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\art\categories;
use App\Models\art\products;
use Auth;

class productController extends Controller
{
    //
    public function add_product(){
        $data = array(
            'title' => 'Add Product',
            'categories' => categories::orderBy('name')->get()
        );
        return view('artist.product.add')->with($data);
    }
    public function insert_product(Request $request){
        $data = $request->all();
        $id = products::addProduct($data);
        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/art/main/'), $filename);
            products::addFeatureImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Art uploaded. Please wait for admin approval.');
    }
    public function delete_product(Request $request)
    {
        $id = base64_decode($request->id);
        products::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Art Deleted.');
    }
    public function edit_product(Request $request)
    { 
        $id = base64_decode($request->id); 
        $data = array(
            'title' => 'Edit Product',
            'product_data' => products::where('artist_id',Auth::id())->where('id',$id)->first(),
            'categories' => categories::orderBy('name')->get()
        ); 
        return view('artist.product.edit')->with($data);
    }
    public function update_product(Request $request)
    {   
        $data = $request->all();
        $id = products::editProduct($data);
        if (isset($request->main_img) && $request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/art/main/'), $filename);
            products::addFeatureImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Product Updated. Please wait for admin approval.');
    }

    public function pending_product()
    {
        $data = array(
            'title' => 'Pending Products',
            'product_data' => products::where('artist_id',Auth::id())->where('status',0)->latest()->paginate(10),
        );
        return view('artist.product.pending')->with($data);
    }
    public function published_product()
    {
        $data = array(
            'title' => 'Published Products',
            'product_data' => products::where('artist_id',Auth::id())->where('status',1)->latest()->paginate(10),
        );
        return view('artist.product.published')->with($data);
    }
    public function rejected_product()
    {
        $data = array(
            'title' => 'Rejected Listing',
            'product_data' => products::where('artist_id',Auth::id())->where('status',2)->latest()->paginate(10),
        );
        return view('artist.product.rejected')->with($data);
    }
    public function product_details($id)
    {
        $id = base64_decode($id);
        $data = array(
            'title' => 'Listing Details',
            'listing' => listing::find($id)
        );
        return view('landlord.listing.listing_details')->with($data);
    }
}
