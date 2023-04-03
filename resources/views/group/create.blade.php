@extends('layouts.layout')
@auth
@section('content')
<div class="body form">
    <h1>Créer votre Groupe d'aventure</h1>
    <form method="POST" action="{{ route('group.create') }}">
        @csrf
        <div class="flexCreate">
            <div>
                <div class="form-group">

                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="places">Nombre de places:</label>
                    <input type="number" name="places" id="places" class="form-control" required>
                </div>
                <div class="form-group">


                    <button type="submit">Valider ce groupe</button>
                </div>
            </div>
    </form>
    <div>
        <img src="/images/character-creator.jpeg" alt="">
        <form>
            @csrf
            <button type="submit">Annuler ce groupe</button>
        </form>
    </div>
</div>





</div>




</div>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif
@endsection

@else
<h1>connecter vous</h1>
@endauth