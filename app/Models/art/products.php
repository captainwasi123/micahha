<?php

namespace App\Models\art;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\art\categories;
use App\Models\art\wishlist;
use App\Models\User;

class products extends Model
{
    use HasFactory;
    protected $table = 'tbl_art_product_info';

    public static function addProduct(array $data){
        $l = new products;
        $l->title = $data['title'];
        $l->img_height = $data['height'];
        $l->img_width = $data['width'];
        $l->category_id = $data['category'];
        $l->price = $data['price'];
        $l->description = $data['description'];
        $l->artist_id = Auth::id();
        $l->status = '0';
        $l->save();

        $id = $l->id;
        
        return $id;
    }

    public static function editProduct(array $data){
        $l = products::find(base64_decode($data['pro_id']));
        $l->title = $data['title'];
        $l->img_height = $data['height'];
        $l->img_width = $data['width'];
        $l->category_id = $data['category'];
        $l->price = $data['price'];
        $l->description = $data['description'];
        $l->save();

        $id = $l->id;

        return $id;
    }

    public static function addFeatureImage($id, $filename){
        $l = products::find($id);
        $l->image = $filename;
        $l->save();
    }


    public function cat(){
        return $this->belongsTo(categories::class, 'category_id');
    }
    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }

    
    public function wishlist(){
        return $this->hasMany(wishlist::class, 'product_id', 'id')->where('user_id', Auth::id());
    }
}
