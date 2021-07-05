<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\accommodation\amenities;

class amenityType extends Model
{
    use HasFactory;
    protected $table = 'tbl_amenities_type';


    public function amenities(){
        return $this->hasMany(amenities::class, 'type_id', 'id');
    }
}
