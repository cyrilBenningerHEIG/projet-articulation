<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vin;

use DB;

class CatalogueController extends Controller
{
    function index ()
    {
        // $vins = DB::table('vins')
        // ->join('regns', 'regns.id', '=', 'vins.regn_id')
        // ->join('pays', 'regns.pays_id', '=', 'pays.id')
        // ->select('vins.nom', 'regns.nom', 'pays.nom');
        $vins = vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn.pays'])
        ->get();

        for ($i=0; $i < sizeof($vins); $i++) { 
            $prixht = $vins[$i]['prix']['prixht'];
            $prixttc = ($prixht)*1.07;
            $prixttc_round = round($prixttc * 20, 0) /20;
            $prixttc_format = number_format($prixttc_round, 2, '.', '');
            $vins[$i]['prix']['prixht'] = $prixttc_format;
        }
        // foreach ($vins[1]['prix']['prixht'] as $prix){
        //     $prix = ($prix)*1.07;
        // }

        return view('produits', [
            'vins'=> $vins,
            // 'prixttc'=> $prixttc,
            ]);
    }

    function show ($id) 
    {   
        $vins = Vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn.pays'])->get()
        ->where('id', $id);

        $prixttc = (($vins[$id-1]['prix']['prixht']))*1.07;
        $prixttc_round = round($prixttc * 20, 0) /20;
        $prixttc_format = number_format($prixttc_round, 2, '.', '');
        $prixeuro = (($vins[$id-1]['prix']['prixht']))*0.89;
        $prixeuro_round = number_format($prixeuro, 2, '.', '');
        return view('productPage', [
            'vins'=> $vins,
            'prixttc'=>$prixttc_format,
            'prixeuro'=>$prixeuro_round,
            ]);
    }
}
