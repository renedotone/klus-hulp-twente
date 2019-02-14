@extends('layout')

@section('title', 'Mijn Klusportaal')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


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
                        <th scope="col">Sluit de klus af</th>
                        <th scope="col">Klus aanpassen</th>
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
                        <td><a class="btn btn-info" href="/jobdetail">Details</a></td>
                        <td>
                            <form action="{{ url('/dashboard', ['id' => $job->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete" />
                                <input type="hidden" name="_method" value="delete" />
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-info" href="/editjobs" role="button">Aanpassen</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
