@extends('layouts.cards')
@auth



<h1 class="epicTitle">Mes Personnages</h1>
@section('content')
<div class="container">
    @foreach($characters as $nom => $character)
    <a class="cardsLink" href="{{ route('character.show', ['nom' => $character->nom]) }}">
        <div class="card">

            <div class="card-image">


                @if($character['specialty'] === 'Guerrier')
                <img class="class" src="/images/guerrier.jpeg" alt="Guerrier" />
                @endif
                @if($character['specialty'] === 'Berserker')
                <img class="class" src="/images/berzecker.jpeg" alt="Guerrier" />
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