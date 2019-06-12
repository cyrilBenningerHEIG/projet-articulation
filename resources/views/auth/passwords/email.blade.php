<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gazzar — Mot de passe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
                </head>
    <body>
        <div id="app">
            <div class="container">
                    @if(Auth::guard('user')->check())
                    <h6>Connecté</h6>
                    @else
                    <h6>Déconnecté</h6>
                    <nav-bar-logout></nav-bar-logout>
                    
                    @endif
                        <div class="container-login100">
                    <form method="POST" id="box" class="" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                    
                                       <h2 id="login-title">Récupéreration du mot de passe</h2>
                                <input id="email" type="email" placeholder="Adresse email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                    
                                    <span class="invalid-feedback" role="alert">
                    
                                        <strong>{{ $message }}</strong>
                    
                                    </span>
                    
                                @enderror
                    
                                                    <button type="submit" id="submit" class="">
                    
                                    {{ __('Envoyer un mail de récupération') }}
                    
                                </button>
                    
                                <a id="login-link" href="{{ route('login') }}">
                    
                                        {{ __("Se connecter") }}
                    
                                    </a>
                    
                                <a id="register-link" href="{{ route('register') }}">
                    
                                        {{ __("S'inscrire") }}
                    
                                    </a>
                    
                                    </form>
                                </div>
                </login-form>
                <footer-bar></footer-bar>
            </div>
        </div>
            <script src="/js/app.js"></script>
    </body>
</html>
