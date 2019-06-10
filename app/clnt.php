<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class clnt extends Authenticatable
{
    protected $guard = 'user';

    protected $table = 'clnts';

    protected $fillable=['nom', 'prenom', 'dateNaissance', 'telephone', 'sexe', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function adress() {
        return $this->hasMany('App\adres');
    }

    public function cmds() {
        return $this->hasMany('App\cmd');
    }

    public function comms() {
        return $this->hasMany('App\comm');
    }

    public function wlist() {
        return $this->hasOne('App\wlist');
    }
}
