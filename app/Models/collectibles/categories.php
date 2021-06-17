<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\collectibles\subCategories;

class categories extends Model
{
    use HasFactory;
    protected $table = 'tbl_categories_info';
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

    public function sub(){
        return $this->hasMany(subCategories::class, 'cat_id', 'id');
    }
}
