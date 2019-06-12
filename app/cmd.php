<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cmd extends Model
{

    protected $fillable=['adresLivr_id', 'adresFact_id', 'total', 'modePmt', 'clnt_id'];


    public function clnt() {
        return $this->belongsTo('App\clnt');
    }

    public function adresFact() {
        return $this->belongsTo('App\adres');
    }

    public function adresLivr() {
        return $this->belongsTo('App\adres');
    }

    public function promocs() {
        return $this->belongsToMany('App\promoc');
    }

    public function vins() {
        return $this->belongsToMany('App\vin')->withPivot('quantite');
    }    
}
