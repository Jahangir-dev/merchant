<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    /**
     * This function getting relationship with Roles
     *
     * @var array
     */

    public function user() {
        return $this->hasOne('App\User', 'role_id', 'id');
    }

}
