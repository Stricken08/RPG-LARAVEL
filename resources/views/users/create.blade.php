@extends('layouts.layout')

@section('content')
<div class="body form">
    <h1>Créer votre Compte</h1>
    <form method="POST" action="/home">
        @csrf
        <div class="form-group">
            <label for="nom">Nom de famille: </label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="annees">Pseudo:</label>
            <input type="text" name="pseudo" id="pseudo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <textarea name="email" id="email" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="password">mot de passe:</label>
            <input type="text" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif
@endsection