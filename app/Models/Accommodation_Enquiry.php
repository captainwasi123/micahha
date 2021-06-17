<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enquiry_type;
use App\Models\accommodation\listing;

class Accommodation_Enquiry extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_enquiry';


    public function type(){
        return $this->belongsTo(Enquiry_type::class, 'enquiry_type_id');
    }

    public function listing(){
        return $this->belongsTo(listing::class, 'list_id');
    }
}
