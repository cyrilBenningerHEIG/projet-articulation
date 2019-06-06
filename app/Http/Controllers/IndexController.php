<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use App\regn;
use App\produ;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vins = vin::with(['produ', 'appel', 'types'])
            ->get();
        $nbvins = Vin::count();
        $nbregions = Regn::count();
        $nbprodu = Produ::count();

        return view('index', [
            'vins' => $vins,
            'nbvins' => $nbvins,
            'nbregions' => $nbregions,
            'nbprodu' => $nbprodu,
        ]);
    }
}
