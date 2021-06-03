<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertyType extends Model
{
    use HasFactory;
    protected $table = 'tbl_property_type';
    public $timestamps = false;

    public static function addType($type){
        $p = new propertyType;
        $p->name = $type;
        $p->save();
    }

    public static function editType(array $data){
        $p = propertyType::find(base64_decode($data['type']));
        $p->name = $data['name'];
        $p->save();
    }
}
