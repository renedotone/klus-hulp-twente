@extends('layout')

@section('title', 'List of Jobs')

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  

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
                              
                            <select class="form-control" name="{{ $job->gemeente_plaatser }}">
                                <option value="Gemeente">Gemeente</option>
                                <option value="Enschede">Enschede</option>
                                <option value="Almelo">Almelo</option>
                                <option value="Borne">Borne</option>
                                <option value="Haaksbergen">Haaksbergen</option>
                                <option value="Hellendoorn">Hellendoorn</option>
                                <option value="Dinkelland">Dinkelland</option>
                                <option value="Hof van Twente">Hof van Twente</option>
                                <option value="Losser">Losser</option>
                                <option value="Oldenzaal">Oldenzaal</option>
                                <option value="Rijssen-Holten">Rijssen-Holten</option>
                                <option value="Tubbergen">Tubbergen</option>
                                <option value="Twenterand">Twenterand</option>
                                <option value="Wierden">Wierden</option>
                            </select>

                            {{-- SELECT * FROM Jobs WHERE gemeente='Enschede'; --}}

                            {{-- <select name="jobs" id="">
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->gemeente_plaatser }}" >{{ $job->gemeente_plaatser }}</option>
                                @endforeach --}}

                            {{-- </select> --}}
                            
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



