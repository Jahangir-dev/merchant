<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;



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
 		
 	public function user()
 	{
 		return $this->belongsTo('App\User');
 	} 	
	
}
