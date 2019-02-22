@extends('layout')

@section('title', 'USER aanpassen')

@section('content')
    <div class="container">
        <h1 class="title">U kunt hier het USER profiel aanpassen</h1>
             
            <form method="POST" action="/edituser/{{ $user->id }}">
                {{ csrf_field() }}
                
                <div class="form-group ">
                    <label for="new_name">Nieuwe naam USER</label>
                    <input name="new_name" type="text" class="form-control" id="new_name" placeholder="nieuwe USER naam" value="{{ $user->name }}"><br>       
                </div>

                <div class="form-group ">
                    <label for="new_adres">Nieuwe adres USER</label>
                    <input name="new_adres" type="text" class="form-control" id="new_adres" placeholder="nieuwe USER adres" value="{{ $user->adres }}"><br>       
                </div>

                <div class="form-group ">
                    <label for="new_huisnummer">Nieuwe huisnummer USER</label>
                    <input name="new_huisnummer" type="text" class="form-control" id="new_huisnummer" placeholder="nieuwe USER huisnummer" value="{{ $user->huisnummer }}"><br>       
                </div>

                <div class="form-group ">
                    <label for="new_postcode">Nieuwe postcode USER</label>
                    <input name="new_postcode" type="text" class="form-control" id="new_postcode" placeholder="nieuwe USER postcode" value="{{ $user->postcode }}"><br>       
                </div>

                <div class="form-group ">
                    <label for="new_gemeente">Nieuwe gemeente USER</label>
                    <input name="new_gemeente" type="text" class="form-control" id="new_gemeente" placeholder="nieuwe USER gemeente" value="{{ $user->gemeente }}"><br>       
                </div>

                {{-- <div class="form-group ">
                    <label for="new_gemeente">Nieuwe gemeente USER</label>
                    <select id="new_gemeente" class="form-control" name="new_gemeente" value="{{ $user->gemeente }}">
                        <option value="Enschede" selected="selected">Enschede</option>
                        <option value="Almelo">Almelo</option>
                        <option value="Hengelo">Hengelo</option>
                        <option value="Borne">Borne</option>
                        <option value="Haaksbergen">Haaksbergen</option>
                        <option value="Hellendoorn">Hellendoorn</option>
                        <option value="Dinkelland">Dinkelland</option>
                        <option value="Hof van Twente">Hof van Twente</option>
                        <option value="Losser">Losser</option>
                        <option value="Oldenzaal">Oldenzaal</option>
                        <option value="Rijssen-Holten">Rijssen-Holten</option>
                        <option value="Tubbergen">Tubbergen</option>
                        <option value="Twenterand">Twenterand</option>
                        <option value="Wierden">Wierden</option>
                    </select><br>
                </div> --}}

                <div class="form-group ">
                    <label for="new_telefoonnummer">Nieuwe telefoonnummer USER</label>
                    <input name="new_telefoonnummer" type="text" class="form-control" id="new_telefoonnummer" placeholder="nieuwe USER telefoonnummer" value="{{ $user->telefoonnummer }}"><br>       
                </div>

                <div class="form-group ">
                    <label for="new_email">Nieuwe email USER</label>
                    <input name="new_email" type="text" class="form-control" id="new_email" placeholder="nieuwe USER email" value="{{ $user->email }}"><br>       
                </div>
            

        
                <button type="submit" class="btn btn-primary">Pas de USER aan</button>  
            </form>     
    </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

@endsection