<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'tbl_collectibles_products_info';

    public static function addProduct(array $data){
        $p = new products;
        $p->title = $data['title'];
        $p->cat_id = $data['category'];
        $p->sub_cat_id = $data['sub_category'];
        $p->price = $data['price'];
        $p->description = $data['description'];
        $p->status = '1';
        $p->save();

        return $p->id;
    }
}
