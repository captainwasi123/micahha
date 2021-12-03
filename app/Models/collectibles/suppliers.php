<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\collectibles\suppliersCountries;

class suppliers extends Model
{
    use HasFactory;
    protected $table = 'tbl_collectibles_suppliers_info';

    public static function addSupplier($data){
        $s = new suppliers;
        $s->name = $data['name'];
        $s->email = $data['email'];
        $s->phone = $data['phone'];
        $s->address = $data['address'];
        $s->description = $data['description'];
        $s->status = '1';
        $s->save();

        suppliersCountries::addSupplierCountries($s->id, $data['country']);
    }

    public static function updateSupplier($data){
        $s = suppliers::find($data['sid']);
        $s->name = $data['name'];
        $s->email = $data['email'];
        $s->phone = $data['phone'];
        $s->address = $data['address'];
        $s->description = $data['description'];
        $s->status = '1';
        $s->save();

        suppliersCountries::where('supplier_id', $data['sid'])->delete();
        suppliersCountries::addSupplierCountries($data['sid'], $data['country']);
    }


    public function countries(){
        return $this->hasMany(suppliersCountries::class, 'supplier_id', 'id');
    }
}
