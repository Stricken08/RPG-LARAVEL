<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleCards.css') }}">
    <title>RPG</title>
</head>

<body>
    <div>
        <ul class="menu cf">
            <li><a href="/home">Accueil</a></li>

            <li>

                <a href="{{ route('character.index') }}">Mes Personnages</a>
                <ul class="submenu">
                    <li><a href="{{ route('character.create') }}">Créer un Personnage</a></li>


                </ul>
            </li>

            <li>

                <a class="a">Les Classes</a>
                <ul class="submenu">

                    <li>
                    <li><a href="{{ route('warrior') }}">Guerrier</a></li>

                    <li><a href="{{ route('mage') }}">Mage</a></li>
                    <li><a href="{{ route('druide') }}">Druide</a></li>
                    <li><a href="{{ route('assassin') }}">Assassin</a></li>
                    <li><a href="{{ route('berserker') }}">Berserker</a></li>
                    <li><a href="{{ route('archer') }}">Archer</a></li>

                </ul>
            </li>
            <li>

                <a href="{{ route('group.index') }}">Mes groupes</a>
                <ul class="submenu">
                    <li><a href="{{ route('group.create') }}">Créer un groupe</a></li>
                    <li>

                    </li>



                </ul>
            </li>
            <li><a href="{{ route('users.show') }}">Profil</a></li>
            <li><a href="{{ route('disconnect') }}">Se Déconnecter</a></li>

    </div>
    @yield('title')
    @yield('content')
</body>

</html>