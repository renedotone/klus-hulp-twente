@extends('layout')

@section('title', 'List of Jobs')

@section('content')

<div class="container">
  
    <h1 class="title">U kunt hier uw klusvraag toevoegen</h1>
    
    <form method="POST" action="/jobs">
        {{ csrf_field() }}

            <div class="form-group ">
                <label for="typehulpvraag">Type Hulpvraag</label>
                <input name="type_hulpvraag" type="text" class="form-control" id="typehulpvraag" placeholder="type hulp vraag"><br>       
            </div>
        
            <div class="form-group">
                <label for="beschrijvinghulpvraag">Beschrijving Hulpvraag</label>
                <input name="beschrijving_hulpvraag" type="text" class="form-control" id="beschrijvinghulpvraag" placeholder="beschrijving gevraagde hulp"><br>
            </div>
        
            <button type="submit" class="btn btn-primary">Voeg de hulpvraag toe</button>
    </form>
</div>

@endsection