<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        $u->status = '1';
        $u->save();
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
}
