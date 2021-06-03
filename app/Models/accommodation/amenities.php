<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amenities extends Model
{
    use HasFactory;
    protected $table = 'tbl_amenities';
    public $timestamps = false;

    public static function addAmenity($amenity){
        $a = new amenities;
        $a->name = $amenity;
        $a->save();
    }

    public static function editAmenity(array $data){
        $a = amenities::find(base64_decode($data['amenity']));
        $a->name = $data['name'];
        $a->save();
    }

}
