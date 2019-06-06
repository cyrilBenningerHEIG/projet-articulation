<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title> Enregistrement </title>
   </head>
   <body id="register-form">
      <form method="POST" id="box_register" class="" action="{{ route('register') }}">
         {{ csrf_field() }}
         <div class="homepageImg">
            <img class="logo" id="img-logo" src="images/logo.svg">
         </div>
         <label id="connect-text">

            {{ __("Inscription") }}

        </label>
            <input id="nom" type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}" required >
            @error('nom')
            <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>
            @enderror
            <input id="prenom" type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}" required >
            @error('prenom')
            <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>
            @enderror

         <input id="telephone" type="phone" name="telephone" placeholder="Téléphone" value="{{ old('telephone') }}" class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}" required>
            @error('telephone')
            <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>
            @enderror
            
            {{-- <label class="container">Homme
                <input type="radio" checked="checked" id="0" name="sexe" value="0">
                <span class="checkmark"></span>
    
                <label class="container">Femme
    
                <input type="radio" name="sexe" id="1" value="1">
    
                <span class="checkmark"></span>
     --}}
                
                <input id="email" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" required>
            @error('email')
            <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>
            @enderror

            <input id="password" type="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" required>
            @error('password')
            <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>
            @enderror
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmer mot de passe" value="{{ old('password_confirmation') }}" class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" required>
            @error('password')
            <span class="invalid-feedback" role="alert">

                <strong>{{ $message }}</strong>

            </span>
            @enderror

        
         <button type="submit" id="submit" >
            {{ __("S'inscrire") }}
         </button>

      <a id="login-link" href="{{ route('login') }}">

        {{ __("Se connecter") }}

    </a>
</form>
      <script src="js/app.js"></script>
   </body>
</html>