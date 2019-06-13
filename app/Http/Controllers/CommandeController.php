<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cmd;
use App\vin;

use App\adres;

use Illuminate\Support\Facades\Auth;

use DB;

class CommandeController extends Controller
{
    public function store(){
        $clntId = Auth::guard("user")->user()->id;

        $cmd = new cmd;
        $cmd->clnt_id = $clntId;
        $cmd->adresLivr_id = request('adresLivrId');
        $cmd->adresFact_id = request('adresFactId');
        $cmd->total = request('total');
        $cmd->modePmt = 'poste';

        $cmd->save();
        $vins= request('vins');
        foreach ($vins as $vin) {
            $id_vin=$vin['vin']['id'];
            $quantity=$vin['quantity'];
            $cmd->vins()->attach($id_vin,['quantite'=>$quantity]);
        }
        
        
        
        

    }

        public function show(){
            $clntId = Auth::guard("user")->user()->id;
            
            $cmd = cmd::where('clnt_id', $clntId)->latest()->first();
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
