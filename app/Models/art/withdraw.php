<?php

namespace App\Models\art;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\art\wallet;
use App\Models\User;
use Auth;

class withdraw extends Model
{
    use HasFactory;
    protected $table = 'tbl_art_withdraw_request';

    public static function addWithdraw(){
        $w = new withdraw;
        $w->user_id = Auth::id();
        $w->amount = Auth::user()->wallet->balance;
        $w->status = '0';
        $w->save();

        $u = wallet::where('user_id', Auth::id())->first();
        $u->balance = 0;
        $u->save();
    }

    public function artist(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
