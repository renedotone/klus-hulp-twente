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
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm mb-5 mt-5">
                <h1 class="title">U kunt hier uw reactie toevoegen</h1>
                <form method="POST" action="/jobdetail">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="hidden" name="job_id" value="{{ $job->id }}" />
                        <input type="hidden" name="naam_plaatser_hulpvraag" value="{{ $job->naam_plaatser }}" />
                        <input type="hidden" name="naam_plaatser" value="{{ $job->naam_plaatser }}" />
                        <label for="response">Uw reactie</label>
                        <textarea class="form-control" rows="5" id="response" name="response"placeholder="U kunt uw reactie hier plaatsen."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Voeg uw reactie toe</button>
                </form>
            </div>
        </div>
    </div>

    @foreach ($response as $response)
    <div class="container">
        <div class="row">
            <div class="col-sm mb-5 mt-5">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title"> De reactie van {{ $response->naam_plaatser_response }}</h5>
                        <p class="card-text">Als reactie op: {{ $response->naam_plaatser_hulpvraag }}</p>
                        <p class="card-text">Reactie: {{ $response->bericht_plaatser_response }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection