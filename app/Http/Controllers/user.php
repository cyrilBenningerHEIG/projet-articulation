<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clnt;

class user extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
}
