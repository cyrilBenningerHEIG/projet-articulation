<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use App\regn;
use App\produ;
use App\type;
use App\pays;
use App\frmt;

class productPageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
        $vins = Vin::with(['produ', 'appel', 'frmt', 'prix', 'condi'])->first();
        return view('productPage', [
            'vins'=> $vins,
            ]);
    }
    
}
