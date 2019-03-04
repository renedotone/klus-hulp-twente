@extends('layout')

@section('title', 'Openstaande Klussen')

@section('content')

<head>
    <link href="{{ asset('css/jobsstyle.css') }}" rel="stylesheet" type="text/css" >
</head>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  

<div class="container-fluid">
    <div class="row">
        <div class="col-sm m-5">
            <div class="table-responsive">
                <table id="jobsTable" class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <form action="/jobs/search" method="get">
                                {{ csrf_field() }}
                                <th>   
                                    <div class="input-group">
                                        <input type="search" name="search" class="form-control" placeholder="Zoek in de klussen...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Zoek</button>
                                        </div>
                                    </div>    
                                </th> 
                                <th scope="col"><a class="btn btn-success" href="{{ url('/jobs') }}">Alle klussen</a></th>
                                <th scope="col"></th>
                                <th scope="col"></th> 
                                <th scope="col"></th> 
                            </form>
                        </tr>

                        <tr>
                            <th scope="col">Naam van de plaatser</th>
                            <th scope="col">Type hulpvraag</th>
                            <th scope="col">Beschrijving hulpvraag</th>
                            <th scope="col">Gemeente</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    
                    @foreach ($jobs as $job)
                    <tbody>
                        <tr>
                            <td>{{ $job->naam_plaatser }}</td>
                            <td>{{ $job->type_hulpvraag }}</td>
                            <td>{{ $job->beschrijving_hulpvraag }}</td>
                            <td>{{ $job->gemeente_plaatser }}</td>
                            <td><a class="btn btn-info" href="{{ url('/jobdetail', $job->id) }}">Details</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection



