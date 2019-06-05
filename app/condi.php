<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class condi extends Model
{
    public function vins() {
        return $this->hasMany('App\vin');
    }
}
