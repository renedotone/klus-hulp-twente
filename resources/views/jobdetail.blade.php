@extends('layout')

@section('title', 'Mijn Klusportaal | Details')

@section('content')



<div class="container-fluid">
        <div class="row">
            <div class="col-sm m-5">
                <div class="table-responsive">
                    <table class="table table-dark table-hover">
                        <thead>
                        <tr>
                            <th>Klusvraag beschrijving</th>
                        </tr>
                        
                        <tr>
                            <th scope="col">Naam van de plaatser</th>
                            <th scope="col">Type hulpvraag</th>
                            <th scope="col">Beschrijving hulpvraag</th>
                            <th scope="col">Email vrager</th>
                            <th scope="col">Adres vrager</th>
                            <th scope="col">Postcode vrager</th>
                            <th scope="col">Gemeente vrager</th>
                            <th scope="col">Telefoonnummer vrager</th>
                            <th scope="col">Reageren?</th>
                        </tr>
                        </thead>
                       
                        <tbody>
                        <tr>
                            <td>{{ $job->naam_plaatser }}</td>
                            <td>{{ $job->type_hulpvraag }}</td>
                            <td>{{ $job->beschrijving_hulpvraag }}</td>
                            <td>{{ $job->email_plaatser }}</td>
                            <td>{{ $job->adres_plaatser }}</td>
                            <td>{{ $job->postcode_plaatser }}</td>
                            <td>{{ $job->gemeente_plaatser }}</td>
                            <td>{{ $job->telefoonnummer_plaatser }}</td>
                            <td><button class="btn btn-info" onclick="myFunction()">Reageer</button></td>
                        </tr>
                        <tr>
                            <td id="demo"></td>

                        </tr>
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
    <p ></p>
@endsection

<script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Bedankt voor uw reactie. De vrager neemt zo snel mogelijk contact met u op.";
    }
    </script>