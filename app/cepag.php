<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cepag extends Model
{
    public function vins() {
        return $this->belongsToMany('App\vins')->withPivot('pourcentage');
    }
}
