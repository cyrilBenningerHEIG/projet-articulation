 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Enregistrement </title>
  </head>
  <body id="login-form">
      <form method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}

      <div id="box">
        <div id="row">
          <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">



              <input id="nom" type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" required autofocus>

              @if ($errors->has('nom'))

              <span class="help-block">

              <strong>{{ $errors->first('nom') }}</strong>

              </span>

              @endif
          </div>


          <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">


              <input id="prenom" type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" required autofocus>

              @if ($errors->has('prenom'))

              <span class="help-block">

              <strong>{{ $errors->first('prenom') }}</strong>

              </span>

              @endif

          </div>
</div>
          <div class="form-group{{ $errors->has('dateNaissance') ? ' has-error' : '' }}">

              <label for="dateNaissance">dateNaissance</label>

              <input id="dateNaissance" type="date" name="dateNaissance"  value="{{ old('dateNaissance') }}" required autofocus>

              @if ($errors->has('dateNaissance'))

              <span class="help-block">

              <strong>{{ $errors->first('dateNaissance') }}</strong>

              </span>

              @endif
          </div>
          <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">



              <input id="telephone" type="phone" name="telephone" placeholder="telephone" value="{{ old('telephone') }}" required autofocus>

              @if ($errors->has('telephone'))

              <span class="help-block">

              <strong>{{ $errors->first('telephone') }}</strong>

              </span>

              @endif
          </div>
          <div class="form-group{{ $errors->has('sexe') ? ' has-error' : '' }}">

                    <legend >Sexe</legend>
                    <div >
                      <div >
                      <label for="homme">Homme</label>
                        <input type="radio" name="sexe" id="0" value="0" checked>

                      </div>
                      <div>
                      <label for="Femme">Femme</label>
                        <input type="radio" name="sexe" id="1" value="1">
              @if ($errors->has('sexe'))
              <span class="help-block">
              <strong>{{ $errors->first('sexe') }}</strong>
              </span>
              @endif
              </div>





              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

<input id="email" type="email"  name="email" placeholder="email"value="{{ old('email') }}" required>

@if ($errors->has('email'))
<span class="help-block">

<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

<input id="password" type="password" placeholder="Mot de passe" name="password" required>
@if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>

<div class="form-group">

<input id="password-confirm" type="password"  placeholder="Confirmez le mot de passe" name="password_confirmation" required>
</div>
</div>




<div class="form-group">

<button type="submit" class="btn btn-primary">
Register
</button>
</div>
</form>




            <script src="js/app.js"></script>

  </body>
</html>
