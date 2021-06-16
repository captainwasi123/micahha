<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\propertyType;
use App\Models\accommodation\listing;
use App\Models\accommodation\amenities;
use App\Models\accommodation\listingAmenities;
use App\Models\collectibles\categories;
use App\Models\collectibles\subCategories;

class settingsController extends Controller
{
    //Accommodation
        //Property type
            public function property_type(){
                $data = propertyType::orderBy('name')->get();

                return view('admin.settings.accommodation.property_type', ['data' => $data]);
            }
            public function property_type_insert(Request $request){
                $validated = $request->validate([
                    'name' => 'required|unique:tbl_property_type'
                ]);
                $data = $request->get('name');
                propertyType::addType($data);

                return redirect()->back()->with('success', 'New Property Type Added.');

            }
            public function edit_property_type($id){
                $id = base64_decode($id);
                $data = propertyType::find($id);

                return view('admin.settings.accommodation.edit_property_type', ['data' => $data]);
            }
            public function property_type_update(Request $request){
                $data = $request->all();
                propertyType::editType($data);

                return redirect()->back()->with('success', 'Property Type Updated.');

            }
            public function delete_property_type($id){
                $id = base64_decode($id);
                propertyType::destroy($id);
                listing::where('property_type', $id)->update([
                    'property_type' => null
                ]);
                return redirect()->back()->with('success', 'Property Type Deleted.');
            }

        //Amenities
            public function amenities(){
                $data = amenities::orderBy('name')->get();

                return view('admin.settings.accommodation.amenities', ['data' => $data]);
            }
            public function amenities_insert(Request $request){
                $validated = $request->validate([
                    'name' => 'required|unique:tbl_amenities'
                ]);
                $data = $request->get('name');
                amenities::addAmenity($data);

                return redirect()->back()->with('success', 'New Amenity Added.');

            }
            public function edit_amenities($id){
                $id = base64_decode($id);
                $data = amenities::find($id);

                return view('admin.settings.accommodation.edit_amenities', ['data' => $data]);
            }
            public function amenities_update(Request $request){
                $data = $request->all();
                amenities::editAmenity($data);

                return redirect()->back()->with('success', 'Amenity Updated.');

            }
            public function delete_amenities($id){
                $id = base64_decode($id);
                amenities::destroy($id);
                listingAmenities::where('amenity_id', $id)->delete();
                return redirect()->back()->with('success', 'Amenity Deleted.');
            }


    //Collectibles
        //Categories
            public function categories(){
                $data = categories::orderBy('name')->get();

                return view('admin.settings.collectibles.categories', ['data' => $data]);
            }

            public function categories_insert(Request $request){
                $validated = $request->validate([
                    'name' => 'required|unique:tbl_categories_info'
                ]);
                $data = $request->get('name');
                categories::addCat($data);

                return redirect()->back()->with('success', 'New Category Added.');

            }
            public function edit_categories($id){
                $id = base64_decode($id);
                $data = categories::find($id);

                return view('admin.settings.collectibles.edit_categories', ['data' => $data]);
            }
            public function categories_update(Request $request){
                $data = $request->all();
                categories::editCat($data);

                return redirect()->back()->with('success', 'Category Updated.');

            }
            public function delete_categories($id){
                $id = base64_decode($id);
                categories::destroy($id);
                subCategories::where('cat_id', $id)->delete();
                return redirect()->back()->with('success', 'Category Deleted.');
            }


        //Sub Categories
            public function subCategories(){
                $data = subCategories::orderBy('name')->get();
                $cat = categories::orderBy('name')->get();

                return view('admin.settings.collectibles.subCategories', ['data' => $data, 'cat' => $cat]);
            }

            public function subCategories_insert(Request $request){
                $data = $request->all();
                subCategories::addCat($data);

                return redirect()->back()->with('success', 'New Sub Category Added.');

            }
            public function edit_subCategories($id){
                $id = base64_decode($id);
                $data = subCategories::find($id);
                $cat = categories::orderBy('name')->get();

                return view('admin.settings.collectibles.edit_subCategories', ['data' => $data, 'cat' => $cat]);
            }
            public function subCategories_update(Request $request){
                $data = $request->all();
                subCategories::editCat($data);

                return redirect()->back()->with('success', 'Sub Category Updated.');

            }
            public function delete_subCategories($id){
                $id = base64_decode($id);
                subCategories::destroy($id);
                return redirect()->back()->with('success', 'Sub Category Deleted.');
            }
}
