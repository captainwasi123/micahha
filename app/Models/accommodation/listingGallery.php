<?php

namespace App\Models\accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listingGallery extends Model
{
    use HasFactory;
    protected $table = 'tbl_accommodation_gallery_info';
    public $timestamps = false;

    public static function addGalleryImage($id, $filename){
        $g = new listingGallery;
        $g->accom_id = $id;
        $g->image = $filename;
        $g->save();

        return $g->id;
    }
}
