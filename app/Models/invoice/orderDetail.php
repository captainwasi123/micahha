<?php

namespace App\Models\invoice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\collectibles\products as Cproducts;
use App\Models\art\products as Aproducts;

class orderDetail extends Model
{
    use HasFactory;
    protected $table = 'tbl_invoice_order_detail_info';
    public $timestamps = false;

    public static function addDetail($id, array $data){
        $d = new orderDetail;
        $d->order_id = $id;
        $d->product_id = base64_decode($data['id']);
        $d->price = $data['price'];
        $d->qty = $data['qty'];
        $d->sub_total = $data['price']*$data['qty'];
        $d->save();
    }

    public function product(){
        return $this->belongsTo(Cproducts::class, 'product_id');
    }


    public function artProduct(){
        return $this->belongsTo(Aproducts::class, 'product_id');
    }
}
