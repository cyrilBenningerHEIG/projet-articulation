<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    public function vins() {
        return $this->belongsToMany('App\vin');
    }
}
