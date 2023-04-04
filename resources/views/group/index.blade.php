@extends('layouts.cards')




<h1 class="epicTitle">Mes Groupes</h1>
@section('content')
@auth
<div class="container">
    @foreach($groups as $nom => $group)
    <a class="cardsLink" href="{{ route('group.show', ['nom' => $group->nom]) }}">
        <div class="card">
            <div class="card-image">
                @if($group['places']
                == '5' ) <img class="class" src="/images/group5.png" alt="Guerrier" />
                @endif
                @if($group['places']
                == '3' ) <img class="class" src="/images/group3.png" alt="Guerrier" />
                @endif
                @if($group['places'] == '6')
                <img class="class" src="/images/group6.png" alt="Guerrier" />
                @endif
            </div>
            <div class="card-text">
                <span class="date">
                    <h3>{{ $group['nom'] }}</h3>
                </span>
                <h3>nombre de places: {{ $group['places'] }}</h3>
                <p>{{ $group['description'] }}</p>

            </div>

        </div>
    </a>
    @endforeach
</div>

@endauth
@endsection