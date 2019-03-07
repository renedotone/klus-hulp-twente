@extends('layout')

@section('title', 'Mijn Klusportaal | Details')

@section('content')
<head>
    <!-- My own CSS -->
    <link href="{{ asset('css/jobdetailstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<div class="jumbotron jumbotron-fluid custom-jumbotron img-fluid">
    <div class="container">
        <h1 class="display-4">Klus Hulp Twente</h1>
        <p class="lead">Specifieke Klus details</p>
    </div>
</div>

<div class="col-sm mt-5 mb-5">
    <div class="card shadow-lg spacer200top">
            <h1 class="mt-5 mb-5 ml-5 mr-5"><i class="fas fa-list-ol green-icon-color"></i> Dit zijn de klusdetails</h1>
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
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="col-sm mt-5 mb-5"> --}}
    <div class="card shadow-lg spacer200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm mb-5 mt-5">
                    <h1 class="title"><i class="fas fa-comments green-icon-color"></i> U kunt hier uw reactie toevoegen</h1>
                    <form method="POST" action="/jobdetail">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="job_id" value="{{ $job->id }}" />
                            <input type="hidden" name="naam_plaatser_hulpvraag" value="{{ $job->naam_plaatser }}" />
                            <input type="hidden" name="naam_plaatser" value="{{ $job->naam_plaatser }}" />
                            <label for="response">Uw reactie</label>
                            <textarea class="form-control" rows="5" id="response" name="response"placeholder="U kunt uw reactie hier plaatsen."></textarea>
                        </div>
                        <button type="submit" class="btn  custom-green-btn">Voeg uw reactie toe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}

    @foreach ($job->responses as $response)
    <div class="container">
        <div class="row">
            <div class="col-sm mb-5 mt-5">
                <div class="card w-100 shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title"> <i class="green-icon-color fas fa-user-edit"></i> De reactie van {{ $response->naam_plaatser_response }}</h5>
                        <p class="card-text text-right"><i class="green-icon-color fas fa-user-edit"></i> Als reactie op {{ $response->naam_plaatser_hulpvraag }}</p>
                        <p class="card-text"><i class="fas fa-comments green-icon-color"></i> Reactie: {{ $response->bericht_plaatser_response }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection