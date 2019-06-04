<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use App\regn;
use App\produ;
use App\appel;
use App\frmt;
use App\prix;
use App\condi;

use DB;

class CatalogueController extends Controller
{
    function index ()
    {
        $vins = Vin::with(['produ', 'appel', 'frmt', 'prix', 'condi'])->get();
        return view('produits', [
            'vins'=> $vins,
            ]);
    }

    function show ($id) 
    {   
        $vins = Vin::with(['produ', 'appel', 'frmt', 'prix', 'condi'])->get()
        ->where('id', $id);

        return view('productPage', [
            'vins'=> $vins,
            ]);
    }
}
