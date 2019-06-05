<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regn extends Model
{
    public function pays() {
        return $this->belongsTo('App\pays');
    }

    public function vins() {
        return $this->hasMany('App\vin');
    }
}
