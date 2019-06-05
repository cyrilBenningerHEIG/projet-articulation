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
        return view('produits', [
            'vins'=> $vins,
            ]);
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
