@extends('layouts.layout')
@auth

@section('content')


<div class="flexRender">
    <div class="container">
        <div class="card">
            <div class="card-image">
                @if($group->places
                == '5' ) <img class="class" src="/images/group5.png" alt="Guerrier" />
                @endif
                @if($group->places
                == '3' ) <img class="class" src="/images/group3.png" alt="Guerrier" />
                @endif
                @if($group->places == '6')
                <img class="class" src="/images/group6.png" alt="Guerrier" />
                @endif
            </div>
            <div class="card-text">
                <span class="date">
                    <h2>{{ $group->places }}</h2>
                </span>
                <h1>{{ $group->nom }}</h1>
                <p>{{ $group->description }}</p>
            </div>
            <div>
                <form class="delete" action="{{ route('group.destroy', ['nom' => $group->nom]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="deleteButton" type="submit">supprimer le groupe</button>
                </form>

            </div>
        </div>
    </div>
</div>

<div>


</div>

</div>

@endsection
@endauth