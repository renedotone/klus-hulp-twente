@extends('layout')

@section('title', 'List of Jobs')

@section('content')

<h1>Lijst van klussen</h1>
    @foreach ($jobs as $job)
        <li>Naam van de plaatser:{{ $job->naam_plaatser }}</li>
        <li>Type hulpvraag:{{ $job->type_hulpvraag }}</li>
        <li>Beschrijving hulpvraag:{{ $job->beschrijving_hulpvraag }}</li>
        <li>Email vrager:{{ $job->email_plaatser }}</li>
        <li>Adres vrager:{{ $job->adres_plaatser }}</li>
        <li>Postcode vrager:{{ $job->postcode_plaatser }}</li>
        <li>Gemeente vrager:{{ $job->gemeente_plaatser }}</li>
        <li>Telefoonnummer vrager:{{ $job->telefoonnummer_plaatser }}</li>
        <a href="/jobdetail">Details</a>
        <br><br>
    @endforeach

@endsection