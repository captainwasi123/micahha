<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\collectibles\categories;
use App\Models\collectibles\subCategories;
use App\Models\collectibles\productGallery;
use App\Models\collectibles\wishlist;
use Auth;

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

    public function category(){
        return $this->belongsTo(categories::class, 'cat_id');
    }
    public function subCategory(){
        return $this->belongsTo(subCategories::class, 'sub_cat_id');
    }

    public function gallery(){
        return $this->hasMany(productGallery::class, 'id', 'product_id');
    }

    public function wishlist(){
        return $this->hasMany(wishlist::class, 'product_id', 'id')->where('user_id', Auth::id());
    }
}
