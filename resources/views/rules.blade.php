@extends('layout')

@section('title', 'Spelregels')

@section('content')
<head>
    <!-- My own CSS -->
    <link href="{{ asset('css/rulesstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
    
<div class="jumbotron jumbotron-fluid custom-jumbotron img-fluid">
    <div class="container">
        <h1 class="display-4">Hoe werkt Klus Hulp Twente?</h1>
        <p class="lead mt-5">Een klus op Klus Hulp Twente plaatsen, gaat snel en eenvoudig. Registreer je, plaats je klus 
            en vervolgens kan je reageren op de reacties die binnenkomen stromen. Kies er simpelweg een uit en transformeer
            je wereld van steen naar marmer!
        </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="card col-md-12 p-3 spacer200top border-0" data-aos="fade-up" data-aos-duration="3000">
            <div class="row ">
                <div class="col-md-8">
                    <div class="card-block">
                        <h1 class="card-title"><i class="far fa-check-circle"></i> Meld je aan</h1>
                        <p class="card-text text-justify">Registreer je als gebruiker. Je ziet straks waarom deze data belangrijk is. 
                            Enkel en alleen maar voor jouw eigen gemak.
                                </p>
                        <p class="card-text text-justify">Er wordt geen persoonlijke informatie
                                met derden gedeeld. Tenzij je daar zelf voor kiest.
                                </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100" src="img/rules/registerimage.jpeg">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="card col-md-12 p-3 spacer200top border-0" data-aos="fade-up" data-aos-duration="3000">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="img/rules/postjob.jpeg">
                </div>
                <div class="col-md-8">
                    <div class="card-block">
                        <h1 class="card-title"><i class="far fa-check-circle"></i> Plaats je klus</h1>
                        <p class="card-text text-justify">Plaats je klus. Omdat je bij het registreren al informatie hebt opgegeven
                            die handig is hoef je je bij deze stap maar enkel te concentreren op de daadwerkelijke hulpvraag.
                                </p>
                        <p class="card-text text-justify">Informatie zoals je naam en waar de klus plaats moet vinden.
                                </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="card col-md-12 p-3 spacer150top border-0" data-aos="fade-up" data-aos-duration="3000">
            <div id="grey-div" class="row ">
                <div class="col-md-8">
                    <div class="card-block">
                        <h1 class="card-title"><i class="far fa-check-circle"></i> Ontvang reacties</h1>
                        <p class="card-text text-justify">Het grootste gedeelte vanuit jouw kant is al gedaan. Nu hoef je enkel nog maar
                            te wachten op de reacties die binnen stromen.
                                </p>
                        <p class="card-text text-justify">Kies simpelweg iemand uit die je het meeste aanspreekt en maak de afspraak.
                                </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100" src="img/rules/handshake.jpeg">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="card col-md-12 p-3 spacer150top border-0" data-aos="fade-up" data-aos-duration="3000">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="img/rules/work.jpeg">
                </div>
                <div class="col-md-8">
                    <div class="card-block">
                        <h1 class="card-title"><i class="far fa-check-circle"></i> Uitvoering van de klus</h1>
                        <p class="card-text text-justify">De klus wordt uitgevoerd door de persoon die je graag wil helpen.
                                </p>
                        <p class="card-text text-justify">En hoewel tegenprestaties geen onderdeel zijn van deze site, wordt het altijd
                            gewaardeerd, vooral door de uitvoerder van de klus, als je een kopje koffie zet.
                                </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="card col-md-12 p-3 spacer200top border-0" data-aos="fade-up" data-aos-duration="3000">
            <div class="row ">
                <div class="col-md-6">
                    <div class="card-block">
                        <h1 class="card-title"><i class="far fa-check-circle"></i> Plaats je succesverhaal</h1>
                        <p class="card-text text-justify">Plaats je feedback voor de rest van de gemeenschap.
                                </p>
                        <p class="card-text text-justify">Het kan anderen helpen hun ervaringen met deze site te 
                            verbeteren.
                                </p>
                    </div>
                </div>
                <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title">
                                        <i class="fas fa-star green-icon-color"></i>
                                        <i class="fas fa-star green-icon-color"></i>
                                        <i class="fas fa-star green-icon-color"></i>
                                        <i class="fas fa-star green-icon-color"></i>
                                        <i class="far fa-star green-icon-color"></i>
                                         Stucadoor woonkamer</h5>
                                <p class="card-text"><i>"Jan Henryk Dąbrowski heeft zijn werk goed gedaan! Echt een vakman. Hij was snel,
                                    op tijd, professioneel en een goed persoon om ook eens een praatje mee te maken."</i>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
