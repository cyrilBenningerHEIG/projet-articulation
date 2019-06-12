<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cmd;

use App\adres;

use Illuminate\Support\Facades\Auth;

use DB;

class CommandeController extends Controller
{
    public function store(){
        $clntId = Auth::guard("user")->user()->id;

        cmd::create([
            'clnt_id' => $clntId,
           'adresLivr_id' => request('adresLivrId'),
            'adresFact_id' => request('adresFactId'),
            'total' => request('total'),
            'modePmt' => 'poste',
            
    
        ]);
    }

        public function show(){
            $clntId = Auth::guard("user")->user()->id;
            
            $cmd = cmd::latest()->first();
            $lastcmd = DB::table('cmds')->where('clnt_id', $clntId)->orderBy('created_at', 'desc')->first();
            $factId = $cmd->adresFact_id;
            $livrId = $cmd->adresLivr_id;
            
    
            $adress_all = adres::all();
            $adress = $adress_all->where('clnt_id', $clntId);
            $adres_fact = $adress->where('id', $factId);
            $adres_livr = $adress->where('id', $livrId);
    
            return view('paiement3', [
                'adresfact' => $adres_fact,
                'adreslivr'=> $adres_livr,
                'cmd' => $cmd

            ]);
        }



    
}
