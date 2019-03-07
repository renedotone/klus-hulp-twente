@extends('layout')

@section('title', 'List of Succes stories')

@section('content')
<head>
    <!-- My own CSS -->
    <link href="{{ asset('css/userblogpoststyle.css') }}" rel="stylesheet" type="text/css" >
</head>
        

<div class="container spacer200top">
    <div class="row">
        <div class="col-sm">
            <div class="card border-0" style="max-width: 1920px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                    <img src="img/userblogposts/happypeople.jpeg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Succesverhalen</h5>
                        <p class="card-text">Hier kan je de succesverhalen vinden van mensen die hun ervaringen 
                            met deze site willen delen. Het zijn echte eraringen geschreven door de gebruikers zelf. En at is ook nodig.
                            Want met de eerlijke feedback kan deze community groeien. </p>
                        <p class="card-text">Dus mocht je graag willen bijdragen, dan kan je hieronder je eigen ervaring delen.</p>
                        <a href="#verhaalinput" class="btn btn-success btn-block mb-5 mt-5" role="button">Wilt u uw ervaring delen? Formulier hier</a>
                        <a href="#userblogposts" class="btn btn-success btn-block mb-5 mt-5" role="button">U kunt hier de ervaringen lezen</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="verhaalinput">
    <div class="container">
        <div id="grey-div" class="row spacer200top">
            <div class="col-sm mb-5 mt-5">
                <h1 class="title mb-5">U kunt hier uw succesverhaal toevoegen</h1>
                <form method="POST" action="/userblogposts">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="typehulpvraag">Type klus</label>
                        <input name="type_hulpvraag_blog" type="text" class="form-control" id="typehulpvraag" placeholder="U kunt hier vermelden om wat voor soort klus het ging."><br>       
                    </div>
                    {{-- <div class="form-group">
                        <label for="beschrijvinghulpvraag">Wie heeft de Hulpvraag uitgevoerd?</label>
                        <input name="beschrijving_hulpvraag" type="text" class="form-control" id="beschrijvinghulpvraag" placeholder="U kunt hier vermelden wie de hulpvraag heeft uitgevoerd."><br>
                    </div> --}}
                    <div class="form-group">
                        <label for="beschrijvinghulpvraag">Uw ervaring</label>
                        <input class="form-control" id="beschrijvinghulpvraag" name="beschrijving_hulpvraag_blog"placeholder="U kunt kort hier uw ervaring plaatsen.">
                    </div>
                    <button type="submit" class="btn btn-success mt-5">Voeg uw succesverhaal toe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="userblogposts"class="spacer200top">
@foreach ($userblogposts as $userblogposts)
<div class="container">
    <div class="row">
        <div class="col-sm mb-5 mt-5">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title"><i class="green-icon-color fas fa-user-edit"></i>Het verhaal van:<br>  {{ $userblogposts->naam_plaatser_blog }}</h3>
                    <p class="card-text text-right"><i class="green-icon-color fas fa-tools"></i>Type hulpvraag:<br> {{ $userblogposts->type_hulpvraag_blog }}</p>
                    <p class="card-text"><i class="green-icon-color fas fa-pen-fancy"></i>Ervaring: <br> {{ $userblogposts->beschrijving_hulpvraag_blog }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</section>

@endsection