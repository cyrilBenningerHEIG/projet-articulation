<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vin;
use Illuminate\Support\Facades\Auth;

use DB;

class CatalogueController extends Controller
{

    function index (Request $request)
    {
            // Display all products
            $vins = vin::with(['produ', 'appel', 'frmt', 'prix.promops', 'condi', 'cepags', 'types', 'regn.pays'])
            ->get();
            $nbvins = count($vins);
            
            // ----------Prices---------//

            for ($i=0; $i < sizeof($vins); $i++) { 
                $prixht = $vins[$i]['prix']['prixht'];
                $prixttc = ($prixht)*1.07;
                $prixttc_round = round($prixttc * 20, 0) /20;
                $prixttc_format = number_format($prixttc_round, 2, '.', '');
                $vins[$i]['prix']['prixht'] = $prixttc_format;
                if (!empty($vins[$i]['prix']['promops'][0])) {
                    $pourcentagePromo = $vins[$i]['prix']['promops'][0]['pourcentage'];
                    $prixpromo = $prixttc_format - ($prixttc_format * ($pourcentagePromo / 100));
                    $prixpromo_round = round($prixpromo * 20, 0) /20;
                    $prixpromo_format = number_format($prixpromo_round, 2, '.', '');
                    $vins[$i]['prix']['prixPromo'] = $prixpromo_format;
                 }
            }

        //---------------------------------Show Filters---------------------------------//
        $types = DB::table('types')->get();
        $pays = DB::table('pays')->orderBy('nom')->get();
        $regns = DB::table('regns')->orderBy('nom')->get();
        $appels = DB::table('appels')->where('libelle', '<>', 'autre')->orderBy('libelle')->get();
        $produs = DB::table('produs')->orderBy('nom')->get();
        $frmts = DB::table('frmts')->orderBy('quantite')->get();
        $millesimes = DB::table('vins')->select('millesime')->distinct('millesime')->orderBy('millesime')->where('millesime', '<>', '0')->get();

        $user = Auth::guard('user')->user();
        return view('produits', [
            'vins'=> $vins,
            'types'=> $types,
            'pays'=> $pays,
            'regns'=> $regns,
            'appels'=> $appels,
            'produs'=> $produs,
            'frmts'=> $frmts,
            'millesimes'=> $millesimes,
            'nbvins'=> $nbvins,
            'pourcentagePromo'=>$pourcentagePromo,
            'user'=>$user
        ]);
        // foreach ($vins[1]['prix']['prixht'] as $prix){
        //     $prix = ($prix)*1.07;
        // }

        // }
    }

    function show ($id) 
    {  
        $user = Auth::guard('user')->user(); 
        $vins_all = Vin::with(['produ', 'appel','prix.promops', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn.pays'])->get();
        $vins = $vins_all->where('id', $id);
        $prixeuro = (($vins[$id-1]['prix']['prixht']))*0.89;
        $prixeuro_round = number_format($prixeuro, 2, '.', '');
        $prixeurottc = $prixeuro_round * 1.07;
        $prixeuro_format = number_format($prixeurottc, 2, '.', '');
        $vinid = $id;
        $prixpromoeuro_format = 0;
        $pourcentagePromo = 0;

        for ($i=0; $i < sizeof($vins_all); $i++) { 
            $prixht = $vins_all[$i]['prix']['prixht'];
            $prixttc = (($vins[$id-1]['prix']['prixht']))*1.07;
         $prixttc_round = round($prixttc * 20, 0) /20;
         $prixttc_format = number_format($prixttc_round, 2, '.', '');
         if (!empty($vins[$i]['prix']['promops'][0])) {
            $pourcentagePromo = $vins[$i]['prix']['promops'][0]['pourcentage'];
            $prixpromo = $prixttc_format - ($prixttc_format * ($pourcentagePromo / 100));
            $prixpromo_round = round($prixpromo * 20, 0) /20;
            $prixpromo_format = number_format($prixpromo_round, 2, '.', '');
            $prixpromoeuro = $prixeuro_format - ($prixeuro_format * ($pourcentagePromo / 100));
            $prixpromoeuro_round = round($prixpromoeuro * 20, 0) /20;
            $prixpromoeuro_format = number_format($prixpromoeuro_round, 2, '.', '');
            $vins[$i]['prix']['prixPromo'] = $prixpromo_format;
         }
        }
        return view('productPage', [
            'vins'=> $vins,
            'prixttc'=>$prixttc_format,
            'prixeuro'=>$prixeuro_round,
            'prixeurottc'=>$prixeuro_format,
            'prixpromoeuro'=>$prixpromoeuro_format,
            'pourcentagePromo'=>$pourcentagePromo,
            'vinid'=>$vinid,
            'vins_all'=>$vins_all,
            'user'=>$user,
            ]);
    }
}

