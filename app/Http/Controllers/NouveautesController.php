<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vin;
// use App\User;

use DB;

class NouveautesController extends Controller
{
    function index ()
    {

            // Display all products
            $vins = vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn.pays'])
             ->whereNotNull('created_at')->get();
            
            // ----------Prices---------//

            for ($i=0; $i < sizeof($vins); $i++) { 
                $prixht = $vins[$i]['prix']['prixht'];
                $prixttc = ($prixht)*1.07;
                $prixttc_round = round($prixttc * 20, 0) /20;
                $prixttc_format = number_format($prixttc_round, 2, '.', '');
                $vins[$i]['prix']['prixht'] = $prixttc_format;
            }
        //---------------------------------Filters---------------------------------//
        $types = DB::table('types')->get();
        $pays = DB::table('pays')->orderBy('nom')->get();
        $regns = DB::table('regns')->orderBy('nom')->get();
        $appels = DB::table('appels')->where('libelle', '<>', 'autre')->orderBy('libelle')->get();
        $produs = DB::table('produs')->orderBy('nom')->get();
        $frmts = DB::table('frmts')->orderBy('quantite')->get();
        $millesimes = DB::table('vins')->select('millesime')->distinct('millesime')->orderBy('millesime')->where('millesime', '<>', '0')->get();

        return view('nouveautes', [
            'vins'=> $vins,
            'types'=> $types,
            'pays'=> $pays,
            'regns'=> $regns,
            'appels'=> $appels,
            'produs'=> $produs,
            'frmts'=> $frmts,
            'millesimes'=> $millesimes
        ]);
        // foreach ($vins[1]['prix']['prixht'] as $prix){
        //     $prix = ($prix)*1.07;
        // }

        // }
    }
}
