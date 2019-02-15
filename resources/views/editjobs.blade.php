@extends('layout')

@section('title', 'Klus aanpassen')

@section('content')


<div class="container">
  
        <h1 class="title">U kunt hier uw klusvraag aanpassen</h1>
        
        {{-- <form action="{{ url('/dashboard', ['id' => $job->id]) }}" method="post"> --}}
            <form method="POST" action="/dashboard">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                
                @foreach ($jobs as $job)
                <div class="form-group ">
                    <label for="typehulpvraag">Type Hulpvraag</label>
                    <input name="type_hulpvraag" type="text" class="form-control" id="typehulpvraag" placeholder="type hulp vraag" value="{{ $job->type_hulpvraag }}"><br>       
                </div>
            
                <div class="form-group">
                    <label for="beschrijvinghulpvraag">Beschrijving Hulpvraag</label>
                    <input name="beschrijving_hulpvraag" type="text" class="form-control" id="beschrijvinghulpvraag" placeholder="beschrijving gevraagde hulp" value="{{ $job->beschrijving_hulpvraag }}"><br>
                </div>
        
                {{-- <button type="submit" class="btn btn-primary" href="#">Pas de klusvraag aan</button> --}}
                @endforeach 
                
            </form>
          
    </div>


@endsection