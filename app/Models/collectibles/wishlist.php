<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\collectibles\products;

class wishlist extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_collectibles_wishlist';
    public $timestamps = false;


    public function product(){
        return $this->belongsTo(products::class, 'product_id');
    }
}
