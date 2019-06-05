<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appel extends Model
{
    public function vins() {
        return $this->hasMany('App\vin');
    }
}
