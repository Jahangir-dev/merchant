<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //
    protected $guarded = [];

    public function user() {
        $this->hasOne('App\User');
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'promocodes_products', 'promocode', 'product_id', 'promo');
    }
}
