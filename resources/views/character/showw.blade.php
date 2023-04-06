@extends('layouts.cards')
@auth


<h1 class="epicTitle">Mes Adversaires ⚔️</h1>




@section('content')
<form class="search" action="{{ route('character.search') }}" method="GET">
    <div class="form-group">
        <label for="nom">Nom: </label>
        <input type="text" class="form-control" name="nom" id="nom">
    </div>
    <div class="form-group">
        <label for="specialty">Spécialité:</label>
        <select class="form-control" name="specialty" id="specialty">
            <option value="">Tous</option>
            <option value="Guerrier">Guerrier</option>
            <option value="Berserker">Berserker</option>
            <option value="Mage">Mage</option>
            <option value="Druide">Druide</option>
            <option value="Assassin">Assassin</option>
            <option value="Archer">Archer</option>
        </select>
    </div>
    <div class="form-group">
        <label for="user_id">Joueur:</label>
        <select class="form-control" name="user_id" id="user_id">
            <option value="">Tous</option>
            @foreach ($users as $id => $pseudo)
            <option value="{{ $id }}">{{ $pseudo }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Rechercher</button>
</form>

<div class="container">

    @foreach($characters as $nom => $character)
    <a class="cardsLink" href="{{ route('character.show', ['nom' => $character->nom]) }}">
        <div class="card">

            <div class="card-image">


                @if($character['specialty'] === 'Guerrier')
                <img class="class" src="/images/guerrier.jpeg" alt="Guerrier" />
                @endif
                @if($character['specialty'] === 'Berserker')
                <img class="class" src="/images/berzecker.png" alt="Guerrier" />
                @endif
                @if( $character['specialty'] === 'Mage')
                <img class="class" src="/images/mage.png" alt="mage" />
                @endif
                @if( $character['specialty'] === 'Druide')
                <img class="class" src="/images/druide.png" alt="druide" />
                @endif
                @if( $character['specialty'] === 'Assassin')
                <img class="class" src="/images/assassin.png" alt="assassin" />
                @endif
                @if( $character['specialty'] === 'Archer')
                <img class="class" src="/images/archer.png" alt="archer" />
                @endif
            </div>
            <div class="card-text">
                <span class="date">
                    <h3>{{ $character['specialty'] }}</h3>
                </span>
                <h3>{{ $character['nom'] }}</h3>
                <p>{{ $character['description'] }}</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">{{ $character['FORCE'] }}<sup></sup></div>
                    <div class="type">Force</div>
                </div>

                <div class="stat border">
                    <div class="value">{{ $character['MAGIE'] }}</div>
                    <div class="type">MAGIE</div>
                </div>
                <div class="stat">

                    <div class="value">{{ $character['PV'] }}</div>
                    <div class="type">PV
                    </div>

                </div>

            </div>

        </div>
    </a>

    @endforeach
</div>

@endauth
@endsection