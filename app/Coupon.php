<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;
use App\PurchaseCoupons;


class Coupon extends Model
{
  
  protected $fillable = [
  	'user_id','type','category_id','title','code','price','discount','expiry','detail','is_active','is_verified','is_featured','user_count','image','is_front','slug','uni_id','link','rating','is_exclusive'
  ];

  // protected $dates = [
  //       'expiry' 
  //   ];
  public function category()
 	{
 		return $this->belongsTo('App\Models\Category','category_id');
 	}
 	public function product()
  {
    return $this->belongsTo('App\Models\Product','category_id');
  }	
 	public function user()
 	{
 		return $this->belongsTo('App\User');
 	} 	
	 public function pCoupon()
  {
    return $this->belongsTo('App\PurchaseCoupons','uni_id','coupon');
  }

   public function uCoupon()
  {
    return $this->belongsTo('App\User','user_id','id');
  } 
}
