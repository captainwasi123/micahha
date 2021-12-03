<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;

class suppliersCountries extends Model
{
    use HasFactory;
    protected $table = 'tbl_collectibles_supplier_shipping';
    public $timestamps = false;

    public static function addSupplierCountries($id, $data){
        foreach($data as $val){
            $s = new suppliersCountries;
            $s->supplier_id = $id;
            $s->country_id = $val;
            $s->save();
        }
    }


    public function country(){
        return $this->belongsTo(country::class, 'country_id');
    }
}
