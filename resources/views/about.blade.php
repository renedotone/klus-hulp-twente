@extends('layout')

@section('title', 'Over ons')

@section('content')

<div class="container">
    <h1 class="m-3">Over ons</h1>
    <h6 class="m-3">
        KlusHulpTwente is het eindproject van de Code Gorilla IT Bootcamp van 
        Bernard Goedendorp, Clemens Jongma, Jeroen Wichers en René Spijker.
        <br><br>
        Code Gorilla is een intensieve bootcamp waarbij wij in 3 maanden worden opgeleid 
        tot junior developer. Om mee te kunnen doen gold een strenge selectieprocedure. 
        Wij zijn (tijdens o.a. een 30 uur durende hackathon) uitgebreid getest op 
        stressbestendigheid, leergierigheid, growth of mind en de competenties om agile 
        te werken. Na drie maanden zijn wij opgeleid tot front- end, back-end of 
        full stack developer met kennis van HTML, CSS, Javascript, PHP, Linux, SQL en Laravel.
    </h6>

        <div class="row">
            <div class="col-sm-6">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">Bernard Goedendorp</h5>
                        <p class="card-text">Hier komt een stukje tekst wat iedereen kan aanleveren.</p>
                        <a href="https://www.linkedin.com/in/bernard-goedendorp/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
                        <a href="https://github.com/BernardG7500"><i class="fab fa-github" style="font-size: 3em"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">Clemens Jongma</h5>
                        <p class="card-text">Hier komt een stukje tekst wat iedereen kan aanleveren.</p>
                        <a href="https://www.linkedin.com/in/clemens-jongma/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
                        <a href="https://github.com/clemensjongma"><i class="fab fa-github" style="font-size: 3em"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">Jeroen Wichers</h5>
                        <p class="card-text">Hier komt een stukje tekst wat iedereen kan aanleveren.</p>
                        <a href="https://www.linkedin.com/in/jeroenarnewichers/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
                        <a href="https://github.com/JeroenArneWichers"><i class="fab fa-github" style="font-size: 3em"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">René Spijker</h5>
                        <p class="card-text">Hier komt een stukje tekst wat iedereen kan aanleveren.</p>
                        <a href="https://www.linkedin.com/in/renedotone/"><i class="fab fa-linkedin" style="font-size: 3em"></i></a>
                        <a href="https://github.com/renedotone"><i class="fab fa-github" style="font-size: 3em"></i></a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection