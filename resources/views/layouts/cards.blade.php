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
            <li><a href="{{ route('character.all') }}">Adversaires</a></li>
            <li><a href="{{ route('disconnect') }}">Se Déconnecter</a></li>

    </div>
    @yield('title')
    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>A propos de nous</h4>
                    <p>Nous sommes une communauté de joueurs passionnés de RPG. Notre objectif est de créer un espace convivial pour les amateurs de jeux de rôle.</p>
                </div>


            </div>
            <hr>
            <p class="text-center">&copy; 2023 RPG Communauté. Tous droits réservés.</p>
        </div>
    </footer>

</body>

</html>