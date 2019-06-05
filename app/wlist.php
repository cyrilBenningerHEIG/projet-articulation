<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wlist extends Model
{

    public function clnt() {
        return $this->belongsTo('App\clnt');
    }

    public function vins() {
        return $this->belongsToMany('App\vin');
    }
}
