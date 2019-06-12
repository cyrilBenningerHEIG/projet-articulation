<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gazzar — Connexion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
                </head>
    <body>
        <div id="app">
            <div class="container">
                <nav-bar-login></nav-bar-login>
                <login-form>
                    <div class="container-login100">
                    <form method="POST" id="box" class="" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    
                                       <h2 id="login-title">Connexion</h2>
                                <input id="email" type="email" placeholder="Adresse email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                    
                                    <span class="invalid-feedback" role="alert">
                    
                                        <strong>{{ $message }}</strong>
                    
                                    </span>
                    
                                @enderror
                    
                    
                                <input id="password" type="password"  placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                @error('password')
                    
                                    <span class="invalid-feedback" role="alert">
                    
                                        <strong>{{ $message }}</strong>
                    
                                    </span>
                    
                                @enderror
                    
                                    <input class="form-check-input" type="hidden" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    

                    
                                <button type="submit" id="submit" class="">
                    
                                    {{ __('Se connecter') }}
                    
                                </button>
                    
                                @if (Route::has('password.request'))
                    
                                    <a id="forgot-pass" href="{{ route('password.request') }}">
                    
                                        {{ __('Mot de passe oublié ?') }}
                    
                                    </a>
                    
                                @endif
                    
                                <a id="register-link" href="{{ route('register') }}">
                    
                                        {{ __("S'inscrire") }}
                    
                                    </a>
                    
                                    </form>
                                </div>
                </login-form>
                <footer-bar></footer-bar>
            </div>
        </div>
            <script src="js/app.js"></script>
    </body>
</html>


{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Connexion </title>
  </head>
  <div id="login-form">
<form method="POST" id="box" class="" action="{{ route('login') }}">
    {{ csrf_field() }}

        <div class="homepageImg">
                <img class="logo" id="img-logo" src="images/logo.svg">
              </div>
              <label id="connect-text">

                    {{ __("Connexion") }}

                </label>
            <input id="email" type="email" placeholder="Adresse email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror


            <input id="password" type="password"  placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

            @enderror

                <input class="form-check-input" type="checkbox" style="margin-top : 32px; margin-left : 50px" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember" >

                    {{ __("S'en souvenir") }}

                </label>

            <button type="submit" id="submit" class="">

                {{ __('Se connecter') }}

            </button>

            @if (Route::has('password.request'))

                <a id="forgot-pass" href="{{ route('password.request') }}">

                    {{ __('Mot de passe oublié ?') }}

                </a>

            @endif

            <a id="register-link" href="{{ route('register') }}">

                    {{ __("S'inscrire") }}

                </a>

                <a id="home-link" href="{{ url('/') }}">

                    <img class="arrow" src="images/arrow_white.svg" style="transform: rotate(180deg); width: 5%;">
                    {{__("Retour")}}

    
                    </a>

            <script src="js/app.js"></script>

                </div>
</html>
 --}}
