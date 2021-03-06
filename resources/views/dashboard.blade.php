@extends('layout')

@section('title', 'Mijn Klusportaal')

@section('stylesheets')
    @parent
    <link type="text/css" rel="stylesheet" href="{{url("css/dashboardstyle.css")}}"/>
@endsection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card shadow-lg">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as USER!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mt-5 mb-5">
    <div class="card shadow-lg">
        <div class="card-header">This section details your JOBS</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm m-5">
            <div class="table-responsive rounded">
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
                        <th scope="col">Verwijder</th>
                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    @foreach ($user->jobs as $job)
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
                        <td><a class="btn btn-info" href="{{ url('/jobdetail', $job->id) }}"><i class="fas fa-info-circle"></a></i></td>
                        <td>
                            <form action="{{ url('/jobs', ['id' => $job->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" value="Delete"><span class="fas fa-trash-alt"></button></span>
                                <input type="hidden" name="_method" value="delete" />
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ url('/editjobs', $job->id) }}" role="button"><i class="fas fa-tools"></a></i>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>

<div class="col-md-12 mt-5 mb-5">
    <div class="card shadow-lg">
        <div class="card-header">This section details your USER BLOG POSTS</div>
            <div class="card-body">
                @foreach ($user->userblogposts as $userblogposts)
                <div class="container">
                    <div class="row">
                        <div class="col-sm mb-5 mt-5">
                            <div class="card w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Het verhaal van {{ $userblogposts->naam_plaatser_blog }}</h5>
                                    <p class="card-text">Type hulpvraag: {{ $userblogposts->type_hulpvraag_blog }}</p>
                                    <p class="card-text">Ervaring: {{ $userblogposts->beschrijving_hulpvraag_blog }}</p>
                                    <form action="{{ url('/dashboard', ['id' => $userblogposts->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" value="Delete"><span class="fas fa-trash-alt"></button></span>
                                        <input type="hidden" name="_method" value="delete" />
                                    </form>
                                </div>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mt-5 mb-5">
    <div class="card shadow-lg">
        <div class="card-header">This section details your USER RESPONSES</div>
            <div class="card-body">
                @foreach ($user->responses as $response)
                <div class="container">
                    <div class="row">
                        <div class="col-sm mb-5 mt-5">
                            <div class="card text-white bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"> De reactie van {{ $response->naam_plaatser_response }}</h5>
                                    <p class="card-text">Als reactie op: {{ $response->naam_plaatser_hulpvraag }}</p>
                                    <p class="card-text">Reactie: {{ $response->bericht_plaatser_response }}</p>
                                    <form action="{{ url('/jobdetail', ['id' => $response->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" value="Delete"><span class="fas fa-trash-alt"></button></span>
                                        <input type="hidden" name="_method" value="delete" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




@endsection
