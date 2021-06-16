<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\collectibles\categories;
use App\Models\collectibles\subCategories;
use App\Models\collectibles\products;

class collectiblesController extends Controller
{
    function statistics(){

        return '';
    }

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
                $u = products::find($id);
                $u->feature_img = $filename;
                $u->save();
                $file->move(base_path('/public/storage/products/feature/'), $filename);
            }
            if(count($data['gallery']) > 0){
                $file = $request->file('feature_img');
                $filename = $id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
                $u = products::find($id);
                $u->feature_img = $filename;
                $u->save();
                $file->move(base_path('/public/storage/products/feature/'), $filename);
            }
            dd($data);
            return redirect()->back()->with('success', 'Product Added.');
        }
        function publishedProduct(){

            return view('admin.collectibles.products.published');
        }
        function draftedProduct(){

            return view('admin.collectibles.products.drafted');
        }
        function getSubCategoryProduct($id){
            $data  = subCategories::where('cat_id', $id)->get();
            $content = '<option value="" selected disabled>Select</option>';
            foreach($data as $val){
                $content .= '<option value="'.$val->id.'">'.$val->name.'</option>';
            }
            return $content;
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
