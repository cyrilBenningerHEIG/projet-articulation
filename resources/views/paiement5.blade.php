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
                    <loading-screen></loading-screen>

                <header-paiement></header-paiement>
                <paiement-validation class="pb-5 pt-5"></paiement-validation>



                <footer-bar></footer-bar>

            </div>
        </div>
            <script src="js/app.js"></script>
            <script> 
                    window.addEventListener("load", function () {
                        const loader = document.querySelector(".loader");
                        loader.className += " hidden"; // class "loader hidden"
                    });
                    
                </script>
    </body>
</html>
