@extends('layouts.cards')
@auth



<h1 class="epicTitle">Mes Personnages</h1>
@section('content')
<div class="container">
    @foreach($characters as $key => $characters)
    <div class="card">
        <div class="card-image">
            @if($characters['specialty'] === 'Guerrier')
            <img class="class" src="/images/guerrier.jpeg" alt="Guerrier" />
            @endif
            @if($characters['specialty'] === 'Berserker')
            <img class="class" src="/images/berzecker.jpeg" alt="Guerrier" />
            @endif
            @if( $characters['specialty'] === 'Mage')
            <img class="class" src="/images/mage.png" alt="mage" />
            @endif
            @if( $characters['specialty'] === 'Druide')
            <img class="class" src="/images/druide.png" alt="druide" />
            @endif
            @if( $characters['specialty'] === 'Assassin')
            <img class="class" src="/images/assassin.png" alt="assassin" />
            @endif
            @if( $characters['specialty'] === 'Archer')
            <img class="class" src="/images/archer.png" alt="archer" />
            @endif
        </div>
        <div class="card-text">
            <span class="date">
                <h3>{{ $characters['specialty'] }}</h3>
            </span>
            <h3>{{ $characters['nom'] }}</h3>
            <p>{{ $characters['description'] }}</p>
        </div>
        <div class="card-stats">
            <div class="stat">
                <div class="value">{{ $characters['FORCE'] }}<sup></sup></div>
                <div class="type">Force</div>
            </div>

            <div class="stat border">
                <div class="value">{{ $characters['MAGIE'] }}</div>
                <div class="type">MAGIE</div>
            </div>
            <div class="stat">
                <div class="value">{{ $characters['PV'] }}</div>
                <div class="type">PV</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endauth
@endsection