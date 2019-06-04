<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vin;

use DB;

class CatalogueController extends Controller
{
    function index ()
    {
        $vins = vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn'])->get();
        return view('produits', [
            'vins'=> $vins,
            ]);
    }

    function show ($id) 
    {   
        $vins = Vin::with(['produ', 'appel', 'frmt', 'prix', 'condi', 'cepags', 'types', 'regn'])->get()
        ->where('id', $id);

        return view('productPage', [
            'vins'=> $vins,
            ]);
    }
}
