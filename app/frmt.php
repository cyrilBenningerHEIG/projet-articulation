<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frmt extends Model
{
    public function vins() {
        return $this->hasMany('App\vin');
    }
}
