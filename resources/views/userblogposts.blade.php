@extends('layout')

@section('title', 'List of Succes stories')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm mb-5 mt-5">
            <div class="card mb-4" style="max-width: 1920px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                    <img src="https://via.placeholder.com/800x800.png?text=placeholder image" class="card-img" alt="...">
                    </div>
                    <div class="col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Succesverhalen</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias aperiam ullam dolores ipsa reprehenderit incidunt repellendus aliquid! In eligendi cupiditate magnam molestiae aspernatur possimus, temporibus recusandae esse sed ab dolores quia, quam atque ea, consequatur culpa minus? Blanditiis, similique quo illo iure magnam quis quisquam at officiis officia, vel inventore.</p>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis optio dolorem dolores incidunt voluptate impedit reprehenderit exercitationem neque? Dolore ea hic sit saepe voluptatum a!</p>
                        <button type="submit" class="btn btn-primary btn-block mb-5 mt-5">Wilt u uw ervaring delen? Formulier hier</button>
                        <button type="submit" class="btn btn-primary btn-block mb-5 mt-5">U kunt hier de ervaringen lezen</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-sm mb-5 mt-5">
                <h1 class="title">U kunt hier uw succes verhaal toevoegen</h1>
                <form method="POST" action="/userblogposts">
                {{ csrf_field() }}
                    <div class="form-group ">
                        <label for="typehulpvraag">Type Hulpvraag</label>
                        <input name="type_hulpvraag_blog" type="text" class="form-control" id="typehulpvraag" placeholder="U kunt hier vermelden om wat voro soort hulp het ging."><br>       
                    </div>
                    <div class="form-group">
                        <label for="beschrijvinghulpvraag">Wie heeft de Hulpvraag uitgevoerd?</label>
                        <input name="beschrijving_hulpvraag" type="text" class="form-control" id="beschrijvinghulpvraag" placeholder="U kunt hier vermelden wie de hulpvraag heeft uitgevoerd."><br>
                    </div>
                    <div class="form-group">
                        <label for="beschrijvinghulpvraag">Uw ervaring</label>
                        <textarea class="form-control" rows="5" id="beschrijvinghulpvraag" name="beschrijving_hulpvraag_blog"placeholder="U kunt uw ervaring hier plaatsen."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Voeg uw succesverhaal toe</button>
                </form>
            </div>
        </div>
    </div>
@foreach ($userblogposts as $userblogposts)
<div class="container">
    <div class="row">
        <div class="col-sm mb-5 mt-5">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Het verhaal van {{ $userblogposts->naam_plaatser_blog }}</h5>
                    <p class="card-text">Type hulpvraag: {{ $userblogposts->type_hulpvraag_blog }}</p>
                    <p class="card-text">Ervaring: {{ $userblogposts->beschrijving_hulpvraag_blog }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection