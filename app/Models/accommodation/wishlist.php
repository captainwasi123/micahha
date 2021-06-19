<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\accommodation\listing;

class wishlist extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_accommodation_wishlist';
    public $timestamps = false;


    public function listing(){
        return $this->belongsTo(listing::class, 'listing_id');
    }
}
