<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amenities extends Model
{
    use HasFactory;
    protected $table = 'tbl_amenities';
    public $timestamps = false;

}
