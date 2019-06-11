<?php

namespace App\Http\Controllers;

use App\adres;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdresseController extends Controller
{
    public function store(){
        $id = Auth::id();

        adres::create([
            'destinataire' => request('destinataire'),
            'rue' => request('rue'),
            'numero' => request('numero'),
            'npa' => request('npa'),
            'localite' => request('localite'),
            'pays' => request('pays'),
            'clnt_id' => $id,
    
        ]);


    }

   
}
