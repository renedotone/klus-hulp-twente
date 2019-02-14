@extends('layout')

@section('title', 'Klus aanpassen')

@section('content')


<div class="container">
  
        <h1 class="title">U kunt hier uw klusvraag aanpassen</h1>
        
        <form method="#" action="#">
            {{ csrf_field() }}
    
                <div class="form-group ">
                    <label for="typehulpvraag">Type Hulpvraag</label>
                    <input name="type_hulpvraag" type="text" class="form-control" id="typehulpvraag" placeholder="type hulp vraag"><br>       
                </div>
            
                <div class="form-group">
                    <label for="beschrijvinghulpvraag">Beschrijving Hulpvraag</label>
                    <input name="beschrijving_hulpvraag" type="text" class="form-control" id="beschrijvinghulpvraag" placeholder="beschrijving gevraagde hulp"><br>
                </div>
            
                <button type="submit" class="btn btn-primary">Pas de klusvraag aan</button>
        </form>
    </div>


@endsection