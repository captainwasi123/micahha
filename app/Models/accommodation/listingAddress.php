<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listingAddress extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_address_info';
    public $timestamps = false;

    public static function addAddress($id, array $data){
        $a = new listingAddress;
        $a->accommodation_id = $id;
        $a->address = $data['address'];
        $a->city = $data['city'];
        $a->state = $data['state'];
        $a->post_code = $data['post_code'];
        $a->country_id = $data['country'];
        $a->save();
    }
}
