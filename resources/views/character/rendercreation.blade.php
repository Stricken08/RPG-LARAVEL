<html>

<head>
    <title>Création d'un personnage</title>
</head>

<body>
    @extends('layouts.layout')
    @auth
    @section('content')


    <div class="flexRender">
        <div class="container">
            <div class="card">
                <div class="card-image">
                    @if($speciality === 'Guerrier')
                    <img class="class" src="/images/guerrier.jpeg" alt="Guerrier" />
                    @endif
                    @if($speciality === 'Berserker')
                    <img class="class" src="/images/berzecker.jpeg" alt="Guerrier" />
                    @endif
                    @if($speciality === 'Mage')
                    <img class="class" src="/images/mage.jpeg" alt="mage" />
                    @endif
                    @if($speciality === 'Druide')
                    <img class="class" src="/images/druide.png" alt="druide" />
                    @endif
                    @if($speciality === 'Assassin')
                    <img class="class" src="/images/assassin.png" alt="assassin" />
                    @endif
                    @if($speciality === 'Archer')
                    <img class="class" src="/images/archer.png" alt="archer" />
                    @endif
                </div>
                <div class="card-text">
                    <span class="date">
                        <h2>{{ $speciality }}</h2>
                    </span>
                    <h1>{{ $nom }}</h1>
                    <p>{{ $description }}</p>
                </div>
                <div class="card-stats">
                    <div class="stat border">
                        <div class="value">{{ $force }}<sup></sup></div>
                        <div class="type">Force</div>
                    </div>
                    <div class="stat border">
                        <div class="value">{{ $agilite }}</div>
                        <div class="type">AGILITE</div>
                    </div>
                    <div class="stat border">
                        <div class="value">{{ $magie }}</div>
                        <div class="type">MAGIE</div>
                    </div>
                    <div class="stat border">
                        <div class="value">{{ $intel }}</div>
                        <div class="type">INTEL</div>
                    </div>
                    <div class="stat">
                        <div class="value">{{ $PV }}</div>
                        <div class="type">PV</div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1>Description</h1>
            @if($speciality === 'Berserker')

            <p>Les Berserkers provoquent leurs ennemis dans un combat au corps à corps, en ajoutant la magie noire aux coups de leur arme pour le rendre plus vulnérable ou le blesser par leur puissance impie. Ils entraînent leur cible dans un duel sans merci, la forçant à se concentrer sur lui loin de ses plus faibles compagnons. Ils peuvent empêcher leur proie d’échapper à leur poigne, mais doivent être attentif aux runes utilisées pour lancer les attaques appropriées.
            </p>
            @endif
            @if($speciality === 'Guerrier')

            <p>Les guerriers s’équipent avec précaution pour le combat, et n’hésitent pas à engager le combat la tête la première tel un éclair vêtu d’une armure lourde. Leurs tactiques de combat sont variées et ils peuvent brandir plusieurs types d’armes pour protéger leurs alliés moins versés dans le combat. Toutefois, ils doivent gérer cette rage et la puissance de leurs assauts les plus violents avec attention, afin de maximiser leur efficacité au cœur de la bataille.

            </p>
            @endif
            @if($speciality === 'Mage')

            <p>Les mages anéantissent leurs ennemis par leurs incantations arcaniques. S’ils manient des sorts offensifs d’une puissance indicible, ils n’en sont pas moins fragiles avec leurs armures légères, ce qui les laisse particulièrement vulnérables au combat en corps-à-corps. Ainsi, les mages les plus sages font un usage réfléchi de leurs sortilèges pour garder leurs ennemis à bonne distance ou les clouer sur place.

            </p>
            @endif
            @if($speciality === 'Druide')

            <p>Les druides peuvent envisager le combat sous de nombreux angles : ils peuvent en effet remplir tous les rôles (soigneurs, tanks et spécialistes des dégâts) mais doivent bien garder à l’esprit les exigences de chacun d’entre eux. Ainsi, il est capital qu’ils choisissent la forme adaptée aux situations rencontrées, car chacune de ces formes a une finalité bien particulière.
            </p>
            @endif
            @if($speciality === 'Assassin')

            <p>Les Assassins prennent souvent la précaution de se dissimuler dans l’ombre pour engager un combat et porter leurs coups pernicieux au corps-à-corps. Si l’affrontement s’éternise, leurs attaques affaiblissent leur adversaire jusqu’à lui porter le coup de grâce. Ces maîtres de l’évasion sélectionnent leurs cibles avec soin afin de ne pas gaspiller leurs enchaînements de coups, et doivent se tenir prêts à s’éclipser ou fuir au cas où la bataille tournerait en leur défaveur.
            </p>
            @endif
            @if($speciality === 'Archer')

            <p>Les Archers combattent leurs ennemis à bonne distance, ordonnant à leurs fidèles familiers d’attaquer tandis qu’ils font pleuvoir les flèches ou les balles, ou empoignent leurs armes d’hast. Si leurs attaques à distance sont dévastatrices à longue comme à courte portée, les chasseurs sont aussi extrêmement mobiles. Ils peuvent esquiver ou ralentir leurs adversaires et ainsi garder le contrôle sur le champ de bataille.
            </p>
            @endif

        </div>
    </div>
    @endsection
    @endauth
</body>

</html>