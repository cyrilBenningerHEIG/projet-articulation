<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vin;
use Illuminate\Support\Facades\Auth;
// use App\User;

use DB;

class PromosController extends Controller
{
    function index ()
    {

            // Display all products
            $vins = vin::with(['produ', 'appel', 'frmt', 'prix.promops', 'condi', 'cepags', 'types', 'regn.pays'])
            ->join('prix_promop', 'vins.prix_id','=','prix_promop.prix_id')
            ->get();
            $nbvins = count($vins);

            
            // ----------Prices---------//

            for ($i=0; $i < sizeof($vins); $i++) { 
                $prixht = $vins[$i]['prix']['prixht'];
                $pourcentagePromo = $vins[$i]['prix']['promops'][0]['pourcentage'];
                $prixttc = ($prixht)*1.07;
                $prixttc_round = round($prixttc * 20, 0) /20;
                $prixttc_format = number_format($prixttc_round, 2, '.', '');
                $vins[$i]['prix']['prixht'] = $prixttc_format;
                $prixpromo = $prixttc_format - ($prixttc_format * ($pourcentagePromo / 100));
                $prixpromo_round = round($prixpromo * 20, 0) /20;
                $prixpromo_format = number_format($prixpromo_round, 2, '.', '');
                $vins[$i]['prix']['prixPromo'] = $prixpromo_format;
            }

        //---------------------------------Filters---------------------------------//
        $types = DB::table('types')->get();
        $pays = DB::table('pays')->orderBy('nom')->get();
        $regns = DB::table('regns')->orderBy('nom')->get();
        $appels = DB::table('appels')->where('libelle', '<>', 'autre')->orderBy('libelle')->get();
        $produs = DB::table('produs')->orderBy('nom')->get();
        $frmts = DB::table('frmts')->orderBy('quantite')->get();
        $millesimes = DB::table('vins')->select('millesime')->distinct('millesime')->orderBy('millesime')->where('millesime', '<>', '0')->get();
        $user = Auth::guard('user')->user();

        return view('promos', [
            'vins'=> $vins,
            'types'=> $types,
            'pays'=> $pays,
            'regns'=> $regns,
            'appels'=> $appels,
            'produs'=> $produs,
            'frmts'=> $frmts,
            'millesimes'=> $millesimes,
            'nbvins'=> $nbvins,
            'user'=>$user
        ]);
        // foreach ($vins[1]['prix']['prixht'] as $prix){
        //     $prix = ($prix)*1.07;
        // }

        // }
        }
}