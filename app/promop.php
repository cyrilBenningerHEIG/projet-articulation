<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promop extends Model
{
    public function prixes() {
        return $this->belongsToMany('App\prix');
    }
}
