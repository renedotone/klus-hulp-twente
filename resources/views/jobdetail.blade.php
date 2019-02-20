@extends('layout')

@section('title', 'Mijn Klusportaal | Details')

@section('content')

<h1>Klusvraag beschrijving</h1>

<div class="container-fluid">
        <div class="row">
            <div class="col-sm m-5">
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Naam van de plaatser</th>
                                <td>{{ $job->naam_plaatser }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Type hulpvraag</th>
                                <td>{{ $job->type_hulpvraag }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Beschrijving hulpvraag</th>
                                <td>{{ $job->beschrijving_hulpvraag }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Email vrager</th>
                                <td>{{ $job->email_plaatser }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Adres vrager</th> 
                                <td>{{ $job->adres_plaatser }}</td>  
                            </tr>
                            <tr>
                                <th scope="col">Postcode vrager</th>
                                <td>{{ $job->postcode_plaatser }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Gemeente vrager</th>
                                <td>{{ $job->gemeente_plaatser }}</td>
                            </tr> 
                            <tr>
                                <th scope="col">Telefoonnummer vrager</th>
                                <td>{{ $job->telefoonnummer_plaatser }}</td>
                            </tr>
                            <tr>
                                <th><button class="btn btn-info" onclick="myFunction()">Reageer</button></th>
                            </tr>
                            <tr>
                                <td id="demo"></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Bedankt voor uw reactie. De vrager neemt zo snel mogelijk contact met u op.";
    }
</script>