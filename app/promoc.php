<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promoc extends Model
{
    
    public function cmds() {
        return $this->belongsToMany('App\cmd');
    }
}
