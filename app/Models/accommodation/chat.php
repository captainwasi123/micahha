<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class chat extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_order_chat';


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
