<?php

namespace App\Models\invoice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\invoice\orderDetail;
use App\Models\invoice\masterInvoice;
use App\Models\User;
use Auth;

class orders extends Model
{
    use HasFactory;
    protected $table = 'tbl_invoice_order_info';

    public static function addOrder($id, $gst, array $data){
        $o = new orders;
        $o->invoice_id = $id;
        $o->price = $data['total'];
        $o->gst = ($data['total']/100)*$gst;
        $o->total_amount = (($data['total']/100)*$gst)+$data['total'];
        $o->seller_id = $data['seller'];
        $o->buyer_id = Auth::id();
        $o->status = '9';
        $o->save();

        $order_id = $o->id;
        $totalamount= $o->total_amount;

        foreach($data['item'] as $val){
            orderDetail::addDetail($order_id, $val);
        }
        
        return  json_encode(['id'=> $order_id, 'amount' => $totalamount]);
    }

    public function details(){
        return $this->hasMany(orderDetail::class, 'order_id', 'id');
    }

    public function invoice(){
        return $this->belongsTo(masterInvoice::class, 'invoice_id');
    }

    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function artist(){
        return $this->belongsTo(User::class, 'seller_id');
    }
}
