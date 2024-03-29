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
                <nav-bar-login :user='{{Auth::guard("user")->user()}}'></nav-bar-login>
                @else
                <nav-bar-logout></nav-bar-logout>
                
                @endif
                <Compte-client :user='{{Auth::guard("user")->user()}}'></compte-client>


                <footer-bar></footer-bar>

            </div>
        </div>
            <script src="js/app.js"></script>
    </body>
</html>
