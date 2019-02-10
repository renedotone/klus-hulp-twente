<html>
    <h1>Lijst van klussen</h1>
    @foreach ($jobs as $job)
        <li>{{ $job->naam_plaatser }}</li>
        <li>{{ $job->type_hulpvraag }}</li>
        <li>{{ $job->beschrijving_hulpvraag }}</li>
        <li>{{ $job->email_plaatser }}</li>
        <br>
    @endforeach
</html>