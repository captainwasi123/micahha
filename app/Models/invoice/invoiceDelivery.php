<?php

namespace App\Models\invoice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;

class invoiceDelivery extends Model
{
    use HasFactory;
    protected $table = 'tbl_invoice_delivery_info';
    public $timestamps = false;

    public static function addInfo($id, array $data){
        $d = new invoiceDelivery;
        $d->invoice_id = $id;
        $d->first_name = $data['first_name'];
        $d->last_name = $data['last_name'];
        $d->email = $data['email'];
        $d->country_id = $data['country'];
        $d->address = $data['address'];
        $d->city = $data['city'];
        $d->state = $data['state'];
        $d->postcode = $data['post_code'];
        $d->phone = $data['phone'];
        $d->save();
    }

    public function country(){
        return $this->belongsTo(country::class, 'country_id');
    }
}
