<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prix extends Model
{
    public function vins() {
        return $this->hasMany('App\vin');
    }

    public function promops() {
        return $this->belongsToMany('App\promop');
    }
}
