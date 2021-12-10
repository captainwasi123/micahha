<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;

class userAddress extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_address_info';



    
    public function country(){
        return $this->belongsTo(country::class, 'country_id');
    }
}
