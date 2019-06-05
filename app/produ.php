<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produ extends Model
{
    public function vins() {
        return $this->hasMany('App\vin');
    }
}
