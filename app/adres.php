<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adres extends Model
{

    protected $fillable=['destinataire', 'rue', 'numero', 'npa', 'localite', 'pays', 'clnt_id'];

    public function clnt() {
        return $this->belongsTo('App\clnt');
    }

    public function cmds() {
        return $this->hasMany('App\cmd');
    }
}
