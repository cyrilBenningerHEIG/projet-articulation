<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gazzar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
      

        <!-- Styles -->
    </head>
    <body>
        <div id="app">
            <div class="container">
            @if(Auth::guard('user')->check())
                <nav-bar-login :user='{{$user}}'></nav-bar-login>
                @else
                <nav-bar-logout></nav-bar-logout>
                
                @endif
            <nav-product-bar></nav-product-bar>
            <product-page class=" mb-5" :vins='{{ $vins }}' :prixttc='{{$prixttc}}' :prixeuro='{{$prixeuro}}' :prixeurottc='{{$prixeurottc}}' :vinid='{{$vinid}}' :prixpromoeuro='{{$prixpromoeuro}}' :pourcentagePromo='{{$pourcentagePromo}}' :lat='{{$lat}}' :long='{{$long}}'></product-page>
            <br>
            <selection-card class="mt-5 mb-5" :vins='{{ $vins_all }}' :prixttc='{{$prixttc}}'></selection-card> 
            <footer-bar></footer-bar>
            </div>
        </div>
            <script src="../js/app.js"></script>
    </body>
</html>