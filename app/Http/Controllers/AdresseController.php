<?php

namespace App\Http\Controllers;

use App\adres;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdresseController extends Controller
{
    public function store(){
        $clntId = Auth::id();

        adres::create([
            'destinataire' => request('destinataire'),
            'rue' => request('rue'),
            'numero' => request('numero'),
            'npa' => request('npa'),
            'localite' => request('localite'),
            'pays' => request('pays'),
            'clnt_id' => $clntId,
    
        ]);


    }

    public function show(){
        $clntId = Auth::id();

        $adres_all = adres::with(['destinataire', 'rue', 'numero', 'npa', 'localite', 'pays', 'clnt_id']);
        $adress = $adress->where('clnt_id', $clntId);

        return view('paiement2', [
            'adress' => $adress,
        ]);
    }

   
}
