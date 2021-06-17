<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\collectibles\categories;
use App\Models\collectibles\subCategories;
use App\Models\collectibles\products;
use App\Models\collectibles\productGallery;

class collectiblesController extends Controller
{
    //Products

        function addProduct(){
            $cat = categories::orderBy('name')->get();

            return view('admin.collectibles.products.new', ['cat' => $cat]);
        }
        function insertProduct(Request $request){
            $data = $request->all();
            $id = products::addProduct($data);
            if($request->hasFile('feature_img')){
                $file = $request->file('feature_img');
                $filename = $id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
                $p = products::find($id);
                $p->feature_img = $filename;
                $p->save();
                $file->move(base_path('/public/storage/products/feature/'), $filename);
            }
            if($request->hasfile('gallery')){
                foreach($request->file('gallery') as $image)
                {
                    $filename = date('dmyHis').'.'.$image->getClientOriginalExtension();
                    $gid = productGallery::addGalleryImage($id, $filename);
                    $filename = $gid.'-'.$filename;
                    $image->move(base_path('/public/storage/products/gallery/'), $filename);
                }
            }
            return redirect()->back()->with('success', 'Product Added.');
        }
        function publishedProduct(){
            $data = products::where('status', '1')->orderBy('created_at', 'desc')->get();

            return view('admin.collectibles.products.published', ['data' => $data]);
        }
        function draftedProduct(){
            $data = products::where('status', '0')->orderBy('created_at', 'desc')->get();

            return view('admin.collectibles.products.drafted', ['data' => $data]);
        }
        function getSubCategoryProduct($id){
            $data  = subCategories::where('cat_id', $id)->get();
            $content = '<option value="" selected disabled>Select</option>';
            foreach($data as $val){
                $content .= '<option value="'.$val->id.'">'.$val->name.'</option>';
            }
            return $content;
        }
        function unPublishProducts($id){
            $id = base64_decode($id);
            $p = products::find($id);
            $p->status = '0';
            $p->save();

            return redirect()->back()->with('success', 'Product sent to draft.');
        }
        function publishProducts($id){
            $id = base64_decode($id);
            $p = products::find($id);
            $p->status = '1';
            $p->save();

            return redirect()->back()->with('success', 'Product Published.');
        }


    //Sales

        function newOrders(){

            return view('admin.collectibles.sales.new');
        }
        function processingOrders(){

            return view('admin.collectibles.sales.processing');
        }
        function deliveredOrders(){

            return view('admin.collectibles.sales.delivered');
        }

        function detailOrders(){

            return view('admin.collectibles.sales.orderDetail');
        }

}
