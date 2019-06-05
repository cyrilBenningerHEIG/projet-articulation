<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comm extends Model
{
    public function clnt() {
        return $this->belongsTo('App\clnt');
    }

    public function vin() {
        return $this->belongsTo('App\vin');
    }
}
