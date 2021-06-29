<?php

namespace App\Models\invoice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\invoice\invoiceDelivery;
use App\Models\invoice\order;
use App\Models\art\wallet;
use Auth;

class masterInvoice extends Model
{
    use HasFactory;
    protected $table = 'tbl_invoice_master_info';

    public static function addInvoice(array $data, array $delivery){
        $i = new masterInvoice;
        $i->buyer_id = Auth::id();
        $i->price = $data['subtotal'];
        $i->gst = ($data['subtotal']/100)*$data['gst'];
        $i->total_amount = (($data['subtotal']/100)*$data['gst'])+$data['subtotal'];
        $i->status = '1';
        $i->save();

        $id = $i->id;

        invoiceDelivery::addInfo($id, $delivery);

        foreach($data['product'] as $val){
            if($val['seller'] != '0'){
                $w = wallet::where('user_id', $val['seller'])->first();
                $w->balance = $w->balance+$val['total'];
                $w->save();
            }
            orders::addOrder($id, $data['gst'], $val);
        }

        return $id;
    }


    public function delivery(){
        return $this->belongsTo(invoiceDelivery::class, 'id', 'invoice_id');
    }
}
