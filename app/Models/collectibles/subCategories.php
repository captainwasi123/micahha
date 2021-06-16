<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\collectibles\categories;

class subCategories extends Model
{
    use HasFactory;
    protected $table = 'tbl_sub_categories_info';
    public $timestamps = false;

    public static function addCat(array $data){
        $p = new subCategories;
        $p->cat_id = $data['cat_id'];
        $p->name = $data['name'];
        $p->save();
    }

    public static function editCat(array $data){
        $p = subCategories::find(base64_decode($data['id']));
        $p->cat_id = $data['cat_id'];
        $p->name = $data['name'];
        $p->save();
    }

    public function cat(){

        return $this->belongsTo(categories::class, 'cat_id');
    }
}
