@extends('layouts.layout')
@section('title')
@section('content')
@if(session('password'))
<h1>Nous vous souhaitons une bonne aventure</h1>
<br><br><br>
<img class="homeImg" src="/images/background2.jpeg" alt="">
@else

<br><br>
<h2 class="font-semp-xLarge-white margin-top-none margin-bottom-normal">Qu’est-ce que Crypt of the Shadowlands ?</h2>
<br>
<p class="parag">Dans Crypt of the Shadowlands, incarnez un héros ou une héroïne puissant(e) et affrontez de gigantesques monstres, lancez-vous dans de périlleux donjons, protégez le monde d’Azeroth des dangers qui le menacent, et bien plus encore. Vous pouvez jouer à Crypt of the Shadowlands gratuitement jusqu’au niveau 20.*</p>
<img class="homeImg" src="/images/background.jpeg" alt="">
@endif

@endsection