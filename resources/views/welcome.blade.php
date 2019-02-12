@extends('layout')

@section('title', 'Landing page')

@section('content')
<head>
    <!-- My own CSS -->
    <link href="{{ asset('css/welcomestyle.css') }}" rel="stylesheet" type="text/css" >
</head>

<div class="container-fluid">
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
                    </div>
                    <div class="carousel-item">
                    <img src="img/welcome/gardeningbanner.jpeg" class="d-block custom-image-welcome" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/welcome/painterbanner.jpg" class="d-block custom-image-welcome" alt="...">
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
</div>

<div class="container-fluid">
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
</div>
    

@endsection