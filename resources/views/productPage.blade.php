<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <nav-product-bar></nav-product-bar>
            <product-page :vins='{{ $vins }}'></product-page>
            <br>
            <selection-card class="mt-5" ></selection-card> 
            <footer-bar></footer-bar>
            </div>
        </div>
            <script src="../js/app.js"></script>
    </body>
</html>
