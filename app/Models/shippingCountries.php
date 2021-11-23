<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;

class shippingCountries extends Model
{
    use HasFactory;
    protected $table = 'tbl_shipping_countries';
    public $timestamps = false;


    public function country(){
        return $this->belongsTo(country::class, 'country_id');
    }
}
