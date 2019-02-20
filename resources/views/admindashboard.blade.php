@extends('layout')

@section('title', 'Admin portaal')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as ADMIN!
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">This section details all JOBS</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table table-dark table-hover">
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
                                    <td><a class="btn btn-info" href="{{ url('/jobdetail', $job->id) }}">Details</a></td>
                                    <td>
                                        <form action="{{ url('/dashboard', ['id' => $job->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                            <input type="hidden" name="_method" value="delete" />
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ url('/editjobs', $job->id) }}" role="button">Aanpassen</a>
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

        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">This section details all USERS</div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table table-dark table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Naam van de USER</th>
                                    <th scope="col">adres van de USER</th>
                                    <th scope="col">huisnummer van de USER</th>
                                    <th scope="col">postcode van de USER</th>
                                    <th scope="col">telefoonnummer van de USER</th>
                                    <th scope="col">email van de USER</th>
                                </tr>
                                </thead>
                                @foreach ($user as $user)
                                <tbody>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->adres }}</td>
                                    <td>{{ $user->huisnummer }}</td>
                                    <td>{{ $user->postcode }}</td>
                                    <td>{{ $user->telefoonnummer }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">This section details all USER BLOG POSTS</div>
                <div class="card-body">
                    @foreach ($userblogposts as $userblogposts)
                    <div class="container">
                        <div class="row">
                            <div class="col-sm mb-5 mt-5">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Het verhaal van {{ $userblogposts->naam_plaatser_blog }}</h5>
                                        <p class="card-text">Type hulpvraag: {{ $userblogposts->type_hulpvraag_blog }}</p>
                                        <p class="card-text">Ervaring: {{ $userblogposts->beschrijving_hulpvraag_blog }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    {{-- </div>
</div> --}}


@endsection
