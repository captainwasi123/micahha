<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertyType extends Model
{
    use HasFactory;
    protected $table = 'tbl_property_type';
    public $timestamps = false;
}
