<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\accommodation\listing;

class reservation extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_reservation_info';
    public $timestamps = false;

    public function landlord(){
        return $this->belongsTo(User::class, 'landlord_id', 'id');
    }

    public function listing(){
        return $this->belongsTo(listing::class, 'list_id', 'id');
    }
}
