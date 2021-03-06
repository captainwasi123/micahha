<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\accommodation\amenities;

class listingAmenities extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_amenities_info';
    public $timestamps = false;

    public static function addAmenity($id, $amenity){
        $a = new listingAmenities;
        $a->accom_id = $id;
        $a->amenity_id = $amenity;
        $a->save();
    }

    public static function editAmenity($id, $amenity){
        $check_amenity = listingAmenities::where('accom_id',$id)->first();
        if(empty($check_amenity)){
            $a = new listingAmenities;
        }else{
            $a = $check_amenity;
        }
        $a->accom_id = $id;
        $a->amenity_id = $amenity;
        $a->save();
    }

    public function amenities()
    {
        return $this->belongsTo(amenities::class, 'amenity_id');
    }
}
