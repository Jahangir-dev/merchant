<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseCoupons extends Model
{
    protected $fillable = [
	    'user_id',
	    'coupon',
	];
}
