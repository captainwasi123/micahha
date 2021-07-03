<?php

namespace App\Models\art;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\saleSetting;
use App\Models\User;
use App\Models\art\portfolio;
use Auth;

class orders extends Model
{
    use HasFactory;
    protected $table = 'tbl_art_portrait_orders_info';

    public static function addOrder(array $data, $product){
        $sales = saleSetting::first();

        $o = new orders;
        $o->artist_id = $product['artist_id'];
        $o->buyer_id = Auth::id();
        $o->product_id = base64_decode($data['pid']);
        $o->requirements = $data['requirements'];
        $o->price = $product['price'];
        $o->gst = ($product['price']/100)*$sales->gst;
        $o->total_price = (($product['price']/100)*$sales->gst)+$product['price'];
        $o->status = '1';
        $o->save();

        $w = wallet::where('user_id', $product['artist_id'])->first();
        if(empty($w->id)){
            $wn = new wallet;
            $wn->user_id = $product['artist_id'];
            $wn->balance = ($product['price']-(($product['price']/100)*$sales->commission));
            $wn->save();
        }else{
            $w->balance = $w->balance+($product['price']-(($product['price']/100)*$sales->commission));
            $w->save();
        }

        return $o->id;
    }


    public static function addFeatureImage($id, $filename){
        $l = orders::find($id);
        $l->attachment = $filename;
        $l->save();
    }


    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }
    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function product(){
        return $this->belongsTo(portfolio::class, 'product_id');
    }
}
