<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    public function regns() {
        return $this->hasMany('App\regn');
    }
}
