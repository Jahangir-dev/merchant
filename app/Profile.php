<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];

    public function user() {
        $this->hasOne('App\User', 'user_id');
    }

}
