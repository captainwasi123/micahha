<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\accommodation\amenityType;

class amenities extends Model
{
    use HasFactory;
    protected $table = 'tbl_amenities';
    public $timestamps = false;

    public static function addAmenity($type, $amenity){
        $a = new amenities;
        $a->type_id = $type;
        $a->name = $amenity;
        $a->save();
    }

    public static function editAmenity(array $data){
        $a = amenities::find(base64_decode($data['amenity']));
        $a->name = $data['name'];
        $a->type_id = $data['type'];
        $a->save();
    }

    public function type(){
        return $this->belongsTo(amenityType::class, 'type_id');
    }
}
