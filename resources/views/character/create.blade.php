@extends('layouts.layout')
@auth
@section('content')
<video autoplay muted loop id="bg-video">
    <source src="/video/background.mp4" type="video/mp4">
</video>
<div class="body form">
    <h1>Créer votre personnage</h1>
    <form method="POST" action="{{ route('character.create') }}">
        @csrf
        <div class="flexCreate">
            <div>
                <div class="form-group">

                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Description:</label>
                    <input type="text" name="description" id="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="speciality">Choisissez votre spécialité :</label>
                    <select require id="specialty" name="speciality">
                        <option value="Guerrier">Guerrier</option>
                        <option value="Mage">Mage</option>
                        <option value="Druide">Druide</option>
                        <option value="Assassin">Assassin</option>
                        <option value="Berserker">Berserker</option>
                        <option value="Archer">Archer</option>
                    </select>
                    <p>Magie <input name="magie" class="stat" type="text" value="{{ $magie }}" readonly></p>
                    <p>Force <input name="force" class="stat" type="text" value="{{ $force }}" readonly></p>
                    <p>Agilité <input name="agilite" class="stat" type="text" value="{{ $agilite }}" readonly></p>
                    <p>Intel <input name="intelligence" class="stat" type="text" value="{{ $intelligence }}" readonly></p>
                    <p>PV <input class="stat" name="PV" type="text" value="{{ $PV }}" readonly></p>

                    <button type="submit">Valider ce personnage</button>
                </div>
            </div>
    </form>
    <div>

        <img src="/images/character-creator.jpeg" alt="">
        <form>
            @csrf
            <button type="submit">Réinitialiser les statistiques</button>
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