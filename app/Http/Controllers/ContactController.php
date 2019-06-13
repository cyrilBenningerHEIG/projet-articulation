<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function send() {
        Mail::send('mailContact', request()->all(), function($Msg){
            $Msg->to([request('Email'),'cyril.benninger@hotmail.ch'])->subject('Contact');
        });
        return redirect('/')->withOk("Le mail a bien été envoyé.");
    }
}
