<?php

namespace App\Models\art;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portraitType extends Model
{
    use HasFactory;
    protected $table = 'tbl_art_portrait_type';
    public $timestamps = false;

    public static function addCat($type){
        $p = new portraitType;
        $p->name = $type;
        $p->save();
    }

    public static function editCat(array $data){
        $p = portraitType::find(base64_decode($data['type']));
        $p->name = $data['name'];
        $p->save();
    }
}
