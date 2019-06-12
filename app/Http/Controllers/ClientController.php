<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\clnt;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected function update()
    {
        
        $id = Auth::guard("user")->user()->id;
        DB::table('clnts')
            ->where('id', $id)
            ->update(['nom' => request('nom'),
            'prenom' => request('prenom'),
            'telephone' => request('telephone'),
            'email' => request('email')]);
        return redirect('compte')->withOk("Le compte a été modifié");
        
    }
}
