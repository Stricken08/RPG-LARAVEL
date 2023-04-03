<html>

<head>
    <title>RPG Maker</title>
</head>

<body>
    @extends('layouts.layout')
    @auth
    @section('content')


    <div class="flexRender">
        <div class="container">
            <div class="card">
                <div class="card-image">
                    @if($places
                    == 3) <img class="class" src="/images/group3.png" alt="Guerrier" />
                    @endif
                    @if($places
                    == 5) <img class="class" src="/images/group3.png" alt="Guerrier" />
                    @endif
                    @if($places==6) <img class="class" src="/images/group6.png" alt="Guerrier" />
                    @endif


                </div>
                <div class="card-text">
                    <span class="date"><br><br><br>
                        <h2>taille du groupe {{ $places }}</h2>
                    </span>
                    <h1>{{ $nom }}</h1>
                    <p>{{ $description }}</p>
                </div>

            </div>
        </div>
    </div>

    </div>
    @endsection
    @endauth
</body>

</html>