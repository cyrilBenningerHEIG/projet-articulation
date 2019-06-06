<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vin extends Model
{
    public function appel() {
        return $this->belongsTo('App\appel');
    }

    public function frmt() {
        return $this->belongsTo('App\frmt');
    }

    public function regn() {
        return $this->belongsTo('App\regn');
    }

    public function prix() {
        return $this->belongsTo('App\prix');
    }

    public function condi() {
        return $this->belongsTo('App\condi');
    }

    public function produ() {
        return $this->belongsTo('App\produ');
    }

    public function cepags() {
        return $this->belongsToMany('App\cepag')->withPivot('pourcentage');
    }

    public function types() {
        return $this->belongsToMany('App\type');
    }

    public function wlists() {
        return $this->belongsToMany('App\wlist');
    }

    public function comms() {
        return $this->hasMany('App\comm');
    }

    public function cmds() {
        return $this->belongsToMany('App\cmd')->withPivot('quantite');
    }

    // public function presentPrixTTC(){
    //     return money_format ('CHF%i', $this->prix*1,07);
    // }

    // public function presentPrixEuro(){
    //     return money_format ('CHF%i', $this->prix*0.89*1,07);
    // }



    
}
