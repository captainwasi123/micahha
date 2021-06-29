<?php

namespace App\Models\art;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'tbl_art_categories';
    public $timestamps = false;

    public static function addCat($type){
        $p = new categories;
        $p->name = $type;
        $p->save();
    }

    public static function editCat(array $data){
        $p = categories::find(base64_decode($data['type']));
        $p->name = $data['name'];
        $p->save();
    }
}
