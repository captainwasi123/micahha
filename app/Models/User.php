<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\country;
use App\Models\accommodation\listing;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tbl_user_info';

    public static function addUser(array $data){
        $u = new User;
        $u->first_name = $data['first-name'];
        $u->last_name = $data['last-name'];
        $u->email = $data['email'];
        $u->password = bcrypt($data['password']);
        $u->country_id = $data['Country'];
        $u->user_type = $data['user_type'];
        $u->newsletter = empty($data['newsletter']) ? '0' : '1';
        $u->status = $data['user_type'] == '1' ? '1' : '0';
        $u->save();
    }

    public static function updateProfile(array $data){
        $p = User::find(Auth::id());
        $p->first_name = $data['first_name'];
        $p->last_name = $data['last_name'];
        $p->phone = $data['phone'];
        $p->address = $data['address'];
        $p->city = $data['city'];
        $p->state = $data['state'];
        $p->post_code = $data['post_code'];
        $p->country_id = $data['country'];
        $p->save();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function country(){
        return $this->belongsTo(country::class, 'country_id');
    }


    //landlord
        public function listings(){
            return $this->hasMany(listing::class, 'landlord_id', 'id');
        }
}
