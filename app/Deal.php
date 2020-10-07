<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //
    protected $guarded = [];

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function products() {
        return $this->belongsToMany('App\Models\Product', 'promocodes_products', 'promocode', 'product_id', 'promo');
    }
}
