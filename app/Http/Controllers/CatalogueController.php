<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vin;

use DB;

class CatalogueController extends Controller
{
    function index ()
    {

        //---------------------------------Products---------------------------------//

        // $vins = DB::table('vins')
        // ->join('regns', 'regns.id', '=', 'vins.regn_id')
        // ->join('pays', 'regns.pays_id', '=', 'pays.id')
        // ->select('vins.nom', 'regns.nom', 'pays.nom');
        // if (condition) {
        //     # code...
        // } else {     

            // Display all products
            $vins = vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn.pays'])
            ->get();

        //---------------------------------Filters---------------------------------//
        $types = DB::table('types')->get();
        $pays = DB::table('pays')->orderBy('nom')->get();
        $regns = DB::table('regns')->orderBy('nom')->get();
        $appels = DB::table('appels')->where('libelle', '<>', 'autre')->orderBy('libelle')->get();
        $produs = DB::table('produs')->orderBy('nom')->get();
        $frmts = DB::table('frmts')->orderBy('quantite')->get();
        $millesimes = DB::table('vins')->select('millesime')->distinct('millesime')->orderBy('millesime')->where('millesime', '<>', '0')->get();

        return view('produits', [
            'vins'=> $vins,
            // 'prixttc'=>$prixttc,
            // 'prixeuro'=>$prixeuro,
            'types'=> $types,
            'pays'=> $pays,
            'regns'=> $regns,
            'appels'=> $appels,
            'produs'=> $produs,
            'frmts'=> $frmts,
            'millesimes'=> $millesimes
            ]);

        // }
    }

    function show ($id) 
    {   
        $vins = Vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn.pays'])->get()
        ->where('id', $id);

        return view('productPage', [
            'vins'=> $vins,
            ]);
    }
}
