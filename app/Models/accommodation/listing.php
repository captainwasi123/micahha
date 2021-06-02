<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\accommodation\amenities;
use App\Models\accommodation\listingAmenities;
use App\Models\accommodation\listingAddress;
use Auth;

class listing extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_info';

    public static function addListing(array $data){
        $l = new listing;
        $l->property_type = $data['property_type'];
        $l->title = $data['title'];
        $l->price = $data['price'];
        $l->unit = $data['price_unit'];
        $l->description = $data['description'];
        $l->landlord_id = Auth::id();
        $l->status = '1';
        $l->publish_days = $data['publish_duration'];
        $l->save();

        $id = $l->id;
        $address = array(
            'address'   => $data['address'],
            'city'      => $data['city'],
            'state'     => $data['state'],
            'post_code' => $data['post_code'],
            'country'   => $data['country'],
        );
        listingAddress::addAddress($id, $address);
        foreach($data['amenities'] as $val){
            listingAmenities::addAmenity($id, $val);
        }

        return $id;   
    }

    public static function addFeatureImage($id, $filename){
        $l = listing::find($id);
        $l->feature_img = $filename;
        $l->save();
    }
}
