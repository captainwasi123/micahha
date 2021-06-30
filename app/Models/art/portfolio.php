<?php

namespace App\Models\art;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\art\portraitType;
use App\Models\User;
use Auth;

class portfolio extends Model
{
    use HasFactory;
    protected $table = 'tbl_art_portfolio_info';

    public static function addPortfolio(array $data){
        $l = new portfolio;
        $l->title = $data['title'];
        $l->price = $data['price'];
        $l->type = $data['type'];
        $l->no_of_subject = $data['no_of_subject'];
        $l->delivery_time = $data['delivery_time'];
        $l->description = $data['description'];
        $l->artist_id = Auth::id();
        $l->status = '0';
        $l->save();

        $id = $l->id;
        
        return $id;
    }

    public static function editPortfolio(array $data){
        $l = portfolio::find(base64_decode($data['pro_id']));
        $l->title = $data['title'];
        $l->price = $data['price'];
        $l->type = $data['type'];
        $l->no_of_subject = $data['no_of_subject'];
        $l->delivery_time = $data['delivery_time'];
        $l->description = $data['description'];
        $l->status = '0';
        $l->save();

        $id = $l->id;

        return $id;
    }

    public static function addFeatureImage($id, $filename){
        $l = portfolio::find($id);
        $l->image = $filename;
        $l->save();
    }

    public function portrait_type(){
        return $this->belongsTo(portraitType::class, 'type');
    }
    public function artist(){
        return $this->belongsTo(User::class, 'artist_id');
    }
}
