{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Enregistrement </title>
  </head>
  <body id="login-form">
      <form id="box" method="POST" action="{{ route('register') }}">
          <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">

              <label for="nom">Nom</label>
              
              <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autofocus>
              
              @if ($errors->has('nom'))
              
              <span class="help-block">
              
              <strong>{{ $errors->first('nom') }}</strong>
              
              </span>
              
              @endif
          </div>

          <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">

              <label for="prenom">prenom</label>
              
              <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required autofocus>
              
              @if ($errors->has('prenom'))
              
              <span class="help-block">
              
              <strong>{{ $errors->first('prenom') }}</strong>
              
              </span>
              
              @endif
          </div>
          <div class="form-group{{ $errors->has('dateNaissance') ? ' has-error' : '' }}">

              <label for="dateNaissance">dateNaissance</label>
              
              <input id="dateNaissance" type="date" name="dateNaissance" value="{{ old('dateNaissance') }}" required autofocus>
              
              @if ($errors->has('dateNaissance'))
              
              <span class="help-block">
              
              <strong>{{ $errors->first('dateNaissance') }}</strong>
              
              </span>
              
              @endif
          </div>
          <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">

              <label for="telephone">telephone</label>
              
              <input id="telephone" type="phone" name="telephone" value="{{ old('telephone') }}" required autofocus>
              
              @if ($errors->has('telephone'))
              
              <span class="help-block">
              
              <strong>{{ $errors->first('telephone') }}</strong>
              
              </span>
              
              @endif
          </div>
          <div class="form-group{{ $errors->has('sexe') ? ' has-error' : '' }}">
              <div class="row">
                    <legend >Sexe</legend>
                    <div >
                      <div >
                        <input type="radio" name="sexe" id="0" value="0" checked>
                        <label for="0">
                          Homme
                        </label>
                      </div>
                      <div>
                        <input type="radio" name="sexe" id="1" value="1">
                        <label for="1">
                          Femme
                        </label>
                      </div>
              @if ($errors->has('sexe'))
              <span class="help-block">
              <strong>{{ $errors->first('sexe') }}</strong>
              </span>
              @endif
              </div>
              </div>
              
            <script src="js/app.js"></script>

  </body>
</html> --}}






@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">S'enregistrer</div>
<div class="panel-body">
<form class="form-horizontal" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
<label for="nom" class="col-md-4 control-label">Nom</label>
<div class="col-md-6">
<input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>
@if ($errors->has('nom'))
<span class="help-block">
<strong>{{ $errors->first('nom') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
<label for="prenom" class="col-md-4 control-label">Prénom</label>
<div class="col-md-6">
<input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>
@if ($errors->has('prenom'))
<span class="help-block">
<strong>{{ $errors->first('prenom') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('dateNaissance') ? ' has-error' : '' }}">
<label for="dateNaissance" class="col-md-4 control-label">Date de naissance</label>
<div class="col-md-6">
<input id="dateNaissance" type="date" class="form-control" name="dateNaissance" value="{{ old('dateNaissance') }}" required autofocus>
@if ($errors->has('dateNaissance'))
<span class="help-block">
<strong>{{ $errors->first('dateNaissance') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
<label for="telephone" class="col-md-4 control-label">Telephone</label>
<div class="col-md-6">
<input id="telephone" type="text" class="form-control" name="telephone">
@if ($errors->has('telephone'))
<span class="help-block">
<strong>{{ $errors->first('telephone') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('sexe') ? ' has-error' : '' }}">
<div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexe</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexe" id="0" value="0" checked>
          <label class="form-check-label" for="0">
            Homme
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexe" id="1" value="1">
          <label class="form-check-label" for="1">
            Femme
          </label>
        </div>
@if ($errors->has('sexe'))
<span class="help-block">
<strong>{{ $errors->first('sexe') }}</strong>
</span>
@endif
</div>
</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="email" class="col-md-4 control-label">Adresse email</label>
<div class="col-md-6">
<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
@if ($errors->has('email'))
<span class="help-block">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label for="password" class="col-md-4 control-label">Mot de passe</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control" name="password" required>
@if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group">
<label for="password-confirm" class="col-md-4 control-label">Confirmez le mot de passe</label>
<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
Register
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
