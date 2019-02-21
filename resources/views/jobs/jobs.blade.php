@extends('layout')

@section('title', 'List of Jobs')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm m-5">
            <div class="table-responsive">
                <table id="jobsTable" class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Naam van de plaatser</th>
                        <th scope="col">Type hulpvraag</th>
                        <th scope="col">Beschrijving hulpvraag</th>
                        <th scope="col">
                            <select name="jobs" id="">
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->gemeente_plaatser }}" >{{ $job->gemeente_plaatser }}</option>
                                @endforeach
                            </select>
                        </th>
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
