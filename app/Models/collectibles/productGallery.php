<?php

namespace App\Models\collectibles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productGallery extends Model
{
    use HasFactory;
    protected $table = 'tbl_collectibles_product_gallery_info';
    public $timestamps = false;
}
