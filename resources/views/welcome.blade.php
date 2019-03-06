@extends('layout')

@section('title', 'Welkom bij KlusHulpTwente')

@section('content')
<head>
    <!-- My own CSS -->
    <link href="{{ asset('css/welcomestyle.css') }}" rel="stylesheet" type="text/css" >
</head>

    <div class="jumbotron jumbotron-fluid custom-jumbotron img-fluid">
        <div class="container">
            <h1 class="display-4">Klus Hulp Twente</h1>
            <p class="lead">Plaats gratis en vrijblijvend een klus</p>
        </div>
    </div>

    <div class="container justify-content-center">
        <h1 class="mt-5 mb-5 ml-5 mr-5">Hoe werkt KlusHulpTwente?</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-file-signature green-icon-color"></i> 1. Meld je aan</h5>
                        <p class="card-text">In een paar simpele stappen kan je je registreren. <br><br>
                            Deze informatie wordt straks automatisch voor
                            je ingevuld wanneer je een klus plaatst.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-paint-roller green-icon-color"></i> 2. Plaats een klus</h5>
                        <p class="card-text">Een klusvraag is zeer eenvoudig geplaatst. <br><br>
                            Veel informatie hoef je zelf niet meer in te vullen.<br><br>
                            Dat doet de site automatisch voor je.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-comments green-icon-color"></i> 3. Lees de reacties</h5>
                        <p class="card-text">Onder de detail pagina van elke klus staan de reacties van mensen die op de klusvraag willen ingaan.<br><br>
                            Kies iemand uit maak de afspraak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container spacer200top justify-content-center">
        <h1 class="mt-5 mb-5 ml-5 mr-5">Ervaring van anderen</h1>
        <div class="row">
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
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title">
                                <i class="fas fa-star green-icon-color"></i>
                                <i class="fas fa-star green-icon-color"></i>
                                <i class="fas fa-star green-icon-color"></i>
                                <i class="fas fa-star green-icon-color"></i>
                                <i class="fas fa-star green-icon-color"></i>
                                 Snoeien heg</h5>
                        <p class="card-text"><i>"Lauri Allan Törni was echt goed bezig. Zeer professioneel. Zelf wist ik niet
                            hoe en wat, maar Lauri wist mij goed te helpen met erachter komen wat ik eigenlijk wou. Dankzij hem is mijn tuin
                            weer perfect!"</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container spacer200" data-aos="fade-up" data-aos-duration="3000">
        <div class="row about-container align-items-center">
                <div class="col-lg-6 background order-lg-2 order-2">
                    <img class="img-responsive" src="../img/layout/klshlp6_ruw.png" alt="" height="90%" width="90%"> 
                </div>
            <div class="col-lg-6 content order-lg-1 order-1">
                <h1 class="title">Iedereen kan wel een steuntje gebruiken.</h1><br> 
                <p>Moet er een kastje getimmerd worden?<br><br> 
                    Muurtje geschilderd worden?<br><br> 
                    Moet er een heg gesnoeid worden?<br><br> 
                </p>
                    
                <p>Alledaagse klussen die iedereeen wel eens geregeld moet hebben in en rondom het huis. Maar niet voor 
                    iedereen is het even makkelijke geregeld. <br> <br> 
                    Soms zit de leeftijd niet mee. <br> <br> 
                    Soms is de gezondheid wat minder.<br> <br> 
                    Of zelfs wanneer de klusvaardigheden wat te wensen overlaten kan je altijd rekenen op je naaste buren.<br>
                </p>

                <p>Mischien zijn je naaste buren wat moeilijk te vinden. Daar is het internet weer het handigste voor.
                    Mensen zijn altijd wel bereid om elkaar te helpen.
                </p>
            </div>
        </div>
    </div>

    <div class="container justify-content-center spacer200bottom">
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <p class="card-text"><i class="fas fa-check green-icon-color"></i> Er wordt geen persoonlijke informatie
                            met derden gedeeld. Tenzij je daar zelf voor kiest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <p class="card-text"><i class="fas fa-check green-icon-color"></i> Dit is een sociaal platform.
                            Tegenprestaties in welke vorm dan ook zijn niet verplicht

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-0">
                    <div class="card-body">
                        <p class="card-text"><i class="fas fa-check green-icon-color"></i> De succesverhalen zijn geschreven door
                            echte gebruikers. Zoals jij.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm mt-5 mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/welcome/carpentrybanner.jpg" class="d-block  custom-image-welcome" alt="...">
                        <div class="carousel-caption d-none d-md-block black-text-color">
                            <h5>Houtbewerking</h5>
                            <p>Moet er een kastje getimmerd worden? Plankje worden opgehangen?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/welcome/gardeningbanner.jpeg" class="d-block custom-image-welcome" alt="...">
                        <div class="carousel-caption d-none d-md-block black-text-color">
                            <h5>Tuinieren</h5>
                            <p>Moet er een heg gesnoeid worden? Gras worden gemaaid?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/welcome/painterbanner.jpg" class="d-block custom-image-welcome" alt="...">
                        <div class="carousel-caption d-none d-md-block black-text-color">
                            <h5>Schilderen</h5>
                            <p>Moet er een muurtje geschilderd worden? Tafel worden gelakt?</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm mt-5 mb-5">
            <div class="card-group">
                <div class="card">
                    <img src="https://via.placeholder.com/800x300.png?text=placeholder for animated counter" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Aantal hulpvragen</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi vel minus possimus pariatur magni repellat impedit nulla esse sunt ex..</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/800x300.png?text=placeholder for animated counter" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Aantal voltooide klussen</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quaerat?</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/800x300.png?text=placeholder for animated counter" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Aantal hulp aanbieders</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iure..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}    

@endsection