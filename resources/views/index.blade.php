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
            @if(Auth::guard('user')->check())
                <h6>Connecté</h6>
                <nav-bar-login></nav-bar-login>
                @else
                <h6>Déconnecté</h6>
                <nav-bar-logout></nav-bar-logout>
                
                @endif
                <menu-home></menu-home>
                <week-selection></week-selection>
                <week-selection-card :vins='{{ $vins }}'></week-selection-card>
                <week-selection-producer></week-selection-producer>
                <history-bar :nbvins='{{ $nbvins }}' :nbregions='{{ $nbregions }}' :nbprodu='{{ $nbprodu }}'></history-bar>
                <footer-bar></footer-bar>
            </div>
        </div>
            <script src="js/app.js"></script>
            <script> window.addEventListener("load", function () {
                    const loader = document.querySelector(".loader");
                    loader.className += " hidden"; // class "loader hidden"
                });</script>
    </body>
</html>
