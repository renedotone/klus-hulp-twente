@extends('layout')

@section('title', 'List of Jobs')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm m-5">
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Naam van de plaatser</th>
                        <th scope="col">Type hulpvraag</th>
                        <th scope="col">Beschrijving hulpvraag</th>
                        <th scope="col">Email vrager</th>
                        <th scope="col">Adres vrager</th>
                        <th scope="col">Postcode vrager</th>
                        <th scope="col">Gemeente vrager</th>
                        <th scope="col">Telefoonnummer vrager</th>
                        <th scope="col">Details</th>
                    </tr>
                    </thead>
                    @foreach ($jobs as $job)
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
                        <td><a href="/jobdetail">Details</a></td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

    
@endsection