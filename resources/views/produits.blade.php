<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gazzar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
                </head>
    <body>
        <div id="app">
            <div class="container">
            @if(Auth::check())
            <h2>Connecté</h2>
                <nav-bar-login></nav-bar-login>
                @else
                <h2>Déconnecté</h2>
                <nav-bar-logout></nav-bar-logout>
                
                @endif
                <menu-produit></menu-produit>
                <product-filter :types='{{ $types }}' :pays='{{ $pays }}' :regns='{{ $regns }}' :appels='{{ $appels }}' :produs='{{ $produs }}' :frmts='{{ $frmts }}' :millesimes='{{ $millesimes }}'></product-filter>
                <carte-produit :vins='{{ $vins }}'></carte-produit>
                <footer-bar></footer-bar>
                
            </div>
        </div>
            <script src="js/app.js"></script>
    </body>
</html>
