<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\accommodation\propertyType;
use App\Models\accommodation\listing;
use App\Models\accommodation\amenities;
use App\Models\accommodation\amenityType;
use App\Models\accommodation\listingAmenities;
use App\Models\collectibles\categories;
use App\Models\collectibles\subCategories;
use App\Models\art\categories as ArtCategories;
use App\Models\art\portraitType;
use App\Models\saleSetting;

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
                $data = amenities::orderBy('type_id')->get();
                $type = amenityType::orderBy('name')->get();

                return view('admin.settings.accommodation.amenities', ['data' => $data, 'type' => $type]);
            }
            public function amenities_insert(Request $request){
                $validated = $request->validate([
                    'name' => 'required|unique:tbl_amenities'
                ]);
                $data = $request->get('name');
                $type = $request->get('type');
                amenities::addAmenity($type, $data);

                return redirect()->back()->with('success', 'New Amenity Added.');

            }
            public function edit_amenities($id){
                $id = base64_decode($id);
                $data = amenities::find($id);
                $type = amenityType::orderBy('name')->get();

                return view('admin.settings.accommodation.edit_amenities', ['data' => $data, 'type' => $type]);
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


    //Art & Portrait Customization
        //Categories
            public function categoriesArt(){
                $data = ArtCategories::orderBy('name')->get();

                return view('admin.settings.art.categoriesArt', ['data' => $data]);
            }

            public function categoriesArt_insert(Request $request){
                $validated = $request->validate([
                    'name' => 'required|unique:tbl_art_categories'
                ]);
                $data = $request->get('name');
                ArtCategories::addCat($data);

                return redirect()->back()->with('success', 'New Category Added.');

            }
            public function edit_categoriesArt($id){
                $id = base64_decode($id);
                $data = ArtCategories::find($id);

                return view('admin.settings.art.edit_categoriesArt', ['data' => $data]);
            }
            public function categoriesArt_update(Request $request){
                $data = $request->all();
                ArtCategories::editCat($data);

                return redirect()->back()->with('success', 'Category Updated.');

            }
            public function delete_categoriesArt($id){
                $id = base64_decode($id);
                ArtCategories::destroy($id);
                return redirect()->back()->with('success', 'Category Deleted.');
            }

        //Portrait Type
            public function portraitTypeArt(){
                $data = portraitType::orderBy('name')->get();

                return view('admin.settings.art.portraitType', ['data' => $data]);
            }

            public function portraitTypeArt_insert(Request $request){
                $validated = $request->validate([
                    'name' => 'required|unique:tbl_art_portrait_type'
                ]);
                $data = $request->get('name');
                portraitType::addCat($data);

                return redirect()->back()->with('success', 'New Portrait Type Added.');

            }
            public function edit_portraitTypeArt($id){
                $id = base64_decode($id);
                $data = portraitType::find($id);

                return view('admin.settings.art.edit_portraitType', ['data' => $data]);
            }
            public function portraitTypeArt_update(Request $request){
                $data = $request->all();
                portraitType::editCat($data);

                return redirect()->back()->with('success', 'Portrait Type Updated.');

            }
            public function delete_portraitTypeArt($id){
                $id = base64_decode($id);
                portraitType::destroy($id);
                return redirect()->back()->with('success', 'Portrait Type Deleted.');
            }


    //Sales Setting
        public function salesSetting(){
            $data = saleSetting::first();

            return view('admin.settings.sales', ['data' => $data]);
        }
        public function salesSettingUpdate(Request $request){
            $data = $request->all();
            $sales = saleSetting::first();
            $sales->gst = $data['gst'];
            $sales->commission = $data['commission'];
            $sales->save();

            return redirect()->back()->with('success', 'Sales settings updated.');
        }
}
