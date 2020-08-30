<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    //use Notifiable;

    protected $guard = "merchants";

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'role_id', 'ip_address', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    //use user id of admin
    protected $primaryKey = 'id';

    //public $table = true;
}
