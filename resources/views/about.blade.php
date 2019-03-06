@extends('layout')

@section('title', 'Over ons')

@section('content')

<head>
    <link href="{{ asset('css/aboutstyle.css') }}" rel="stylesheet" type="text/css" >
</head>

<div class="jumbotron jumbotron-fluid custom-jumbotron img-fluid">
    <div class="container">
        <h1 class="display-2">Over ons</h1>
    </div>
</div> 

<div class="container-fluid">
    <h6 class="m-3">
        KlusHulpTwente is het eindproject van de Code Gorilla IT Bootcamp van 
        Bernard Goedendorp, Clemens Jongma, Jeroen Wichers en René Spijker.
    </h6>    
    <p class="m-3">
        Code Gorilla is een intensieve bootcamp waarbij wij in 3 maanden worden opgeleid 
        tot junior developer. Om mee te kunnen doen gold een strenge selectieprocedure. 
        Wij zijn (tijdens o.a. een 30 uur durende hackathon) uitgebreid getest op 
        stressbestendigheid, leergierigheid, growth of mind en de competenties om agile 
        te werken. Na drie maanden zijn wij opgeleid tot front- end, back-end of 
        full stack developer met kennis van HTML, CSS, Javascript, PHP, Linux, SQL en Laravel.
    </p> 
</div>

<div class="container-fluid">
    <main class="grid">
        <article>
          <img src="/img/about/bernard.jpeg" Height="300" width="300" alt="Photo Bernard">
          <div class="text">
            <h3 class="card-title">Bernard Goedendorp</h3>
            <a id="linkedin" href="https://www.linkedin.com/in/bernard-goedendorp/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
            <a id="github" href="https://github.com/BernardG7500"><i class="fab fa-github" style="font-size: 3em"></i></a>
          </div>
        </article>
        <article>
          <img src="/img/about/clemens.jpeg" Height="300" width="300" alt="Photo Clemens">
          <div class="text">
            <h3 class="card-title">Clemens Jongma</h3>
            <a id="linkedin" href="https://www.linkedin.com/in/clemens-jongma/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
            <a id="github" href="https://github.com/clemensjongma"><i class="fab fa-github" style="font-size: 3em"></i></a>
          </div>
        </article>
        <article>
          <img src="/img/about/jeroen.jpeg" Height="300" width="300" alt="Photo Jeroen">
          <div class="text">
            <h3 class="card-title">Jeroen Wichers</h3>
            <a id="linkedin" href="https://www.linkedin.com/in/jeroenarnewichers/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
            <a id="github" href="https://github.com/JeroenArneWichers"><i class="fab fa-github" style="font-size: 3em"></i></a>
          </div>
        </article>
        <article>
          <img src="/img/about/rene.jpeg" Height="300" width="300" alt="Photo Rene">
          <div class="text">
            <h3 class="card-title">René Spijker</h3>
            <a id="linkedin" href="https://www.linkedin.com/in/renedotone/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
            <a id="github" href="https://github.com/renedotone"><i class="fab fa-github" style="font-size: 3em"></i></a>
          </div>
        </article>
    </main>
</div>

@endsection