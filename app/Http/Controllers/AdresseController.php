<?php

namespace App\Http\Controllers;

use App\adres;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdresseController extends Controller
{
    public function store(){
        $clntId = Auth::guard("user")->user()->id;

        adres::create([
            'destinataire' => request('destinataire'),
            'rue' => request('rue'),
            'numero' => request('numero'),
            'npa' => request('npa'),
            'localite' => request('localite'),
            'pays' => request('pays'),
            'clnt_id' => $clntId,
    
        ]);
        $request->validate([
            'destinataire' => 'required',
            'rue' => 'required',
            'numero' => 'required',
            'npa' => 'required',
            'localite' => 'required',
            'pays' => 'required',
        ]);

        return response()->json(['status'=>'true']);

    }

    public function show(){
        $clntId = Auth::guard("user")->user()->id;

        $adress_all = adres::all();
        $adress = $adress_all->where('clnt_id', $clntId);

        return view('paiement2', [
            'adress' => $adress,    
        ]);
    }

   
}
