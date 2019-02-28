@extends('layout')

@section('title', 'Spelregels')

@section('content')

<div class="container">
    <h1 class="m-3">Wat zijn de spelregels?</h1>
    <p>De spelregels zijn:</p>
    <br><br>
    <p>1. <a href = "/jobs">Hier</a> kun je zoeken op klussen. Deze zijn ook te vinden onder 'Openstaande klussen' in de navigatiebalk.</p>
    <p>2. <a href = "login">Hier</a> kun je je registreren op onze site. Alleen dan kun je <a href = "/addingjobs"> hier</a> klussen toevoegen. Dat kan ook bij 'Voeg een klus toe' in de navigatiebalk.</p>
    <p>3. <a href = "/dashboard">Hier</a> kun je je eigen klussen zien en eventueel ook verwijderen. Dat kan ook in 'Mijn klusportaal' in de navigatiebalk.</p>
    <p>4. <a href = "/jobs">Hier</a> kun je reageren op een klus maak je een match. Dit kan ook in 'Openstaande klussen' in de navigatiebalk. Je kunt alleen reageren als je ingelogd bent.</p>
    <p>5. <a href = "/userblogposts">Hier</a> kun je ervaringen lezen van anderen en ook je eigen verhaal toevoegen. Dat kan ook bij de 'Succesverhalen' in de navigatiebalk. </p>
    <br><br>
</div>

@endsection
