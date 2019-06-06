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
                <header-paiement class="mt-3"></header-paiement>
                <header-retour class="mb-3 mt-3"></header-retour>
                <paiement-etape4 class="mt-3 mb-3"></paiement-etape4>
                <paiement-resumer></paiement-resumer>



                <footer-bar></footer-bar>

            </div>
        </div>
            <script src="js/app.js"></script>
    </body>
</html>
