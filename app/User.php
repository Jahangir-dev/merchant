<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Gabievi\Promocodes\Traits\Rewardable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Order;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,Rewardable;

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
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * This function getting relationship with Roles
     *
     * @var array
     */

    public function role() {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    public function media() {
        return $this->hasMany('App\Media', 'user_id', 'id');
    }

    public function deals() {
        return $this->hasMany('App\Deal', 'user_id', 'id');
    }

    public function products() {
        return $this->hasMany('App\Models\Product', 'user_id', 'id')->with('images')->with('categories')->with('brand');
    }

    public function categories() {
        return $this->hasMany('App\Models\Category', 'user_id', 'id');
    }

    public function brands() {
        return $this->hasMany('App\Models\Brand', 'user_id', 'id');
    }

      public function orders()
    {
        return $this->hasMany(Order::class);
    }

     public function getFullNameAttribute()
    {
        return $this->first_name. ' '. $this->last_name;
    }
}
