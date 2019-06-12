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
                <nav-bar-login :user='{{$user}}'></nav-bar-login>
                @else
                <h6>Déconnecté</h6>
                <nav-bar-logout></nav-bar-logout>
                @endif
                <div class="container">
                    <hr>
                    <h4 class="center" style="padding-top 25px"> C'est une erreur 404, vous ne trouverez pas de vin par ici</h4>
                {{-- <img class="gif404" src="https://media3.giphy.com/media/10pVtJi0VzADHa/giphy.gif?cid=790b76115d010a6378307a547364d317&rid=giphy.gif" alt="">
                <img class="gif404" src="https://i.giphy.com/media/1BXa2alBjrCXC/giphy.webp" alt="">
                <img class="gif404" src="https://i.giphy.com/media/E3L5goMMSoAAo/giphy.webp" alt=""> --}}
                <img class="gif404 center" src=" https://i.giphy.com/media/ZFJYcVE5lYvWE/giphy.webp" style="padding-bottom : 25px; padding-top : 25px"alt="">
                <div class="container" style="height : 100px;text-align: center;">
                        <a href="/">
                          <button class="btn btn-danger" style="margin-top : 35px">Revenir à la boutique</button>
                        </a>
                      </div>    
            </div>  
            <footer-bar></footer-bar>

            </div>
        </div>
            <script src="js/app.js"></script>
    </body>
</html>
