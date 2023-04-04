@extends('layouts.cards')




<h1 class="epicTitle">Mes Groupes</h1>
@section('content')
@auth
<div class="container">
    @foreach($groups as $nom => $groups)
    <div class="card">
        <div class="card-image">
            @if($groups['places']
            == '5' ) <img class="class" src="/images/group5.png" alt="Guerrier" />
            @endif
            @if($groups['places']
            == '3' ) <img class="class" src="/images/group3.png" alt="Guerrier" />
            @endif
            @if($groups['places'] == '6')
            <img class="class" src="/images/group6.png" alt="Guerrier" />
            @endif
        </div>
        <div class="card-text">
            <span class="date">
                <h3>{{ $groups['nom'] }}</h3>
            </span>
            <h3>nombre de places: {{ $groups['places'] }}</h3>
            <p>{{ $groups['description'] }}</p>
            <form class="delete" action="{{ route('group.destroy', ['nom' => $groups->nom]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="deleteButton" type="submit">Supprimer ce groupe</button>
            </form>
        </div>

    </div>
    @endforeach
</div>
@endauth
@endsection