@extends('layout')

@section('title', 'List of Jobs')

@section('content')

<div class="container">
  
    <h1 class="title">U kunt hier uw klusvraag toevoegen</h1>
    
    <form method="POST" action="/jobs">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="beschrijvinghulpvraag">Type Hulpvraag</label>
                    <select id="typehulpvraag" class="form-control{{ $errors->has('typehulpvraag') ? ' is-invalid' : '' }}" name="type_hulpvraag" value="{{ old('typehulpvraag') }}" required autofocus>
                        <option value="Schilderen" selected="selected">Schilderen</option>
                        <option value="Tuinieren">Tuinieren</option>
                        <option value="Houtbewerking">Houtbewerking</option>
                        <option value="Schoonmaken">Schoonmaken</option>
                        <option value="Verhuizen">Verhuizen</option>
                        <option value="Koken">Koken</option>
                        <option value="Boodschappen doen">Boodschappen doen</option>
                    </select>
            </div>
        
            <div class="form-group">
                <label for="beschrijvinghulpvraag">Beschrijving Hulpvraag</label>
                <input name="beschrijving_hulpvraag" type="text" class="form-control" id="beschrijvinghulpvraag" placeholder="beschrijving gevraagde hulp"><br>
            </div>
        
            <button type="submit" class="btn btn-primary">Voeg de hulpvraag toe</button>
    </form>
</div>

@endsection