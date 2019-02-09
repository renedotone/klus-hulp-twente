<html>
    <h1>U kunt hier uw klusvraag toevoegen</h1>
    <form method="POST" action="/jobs">
        {{ csrf_field() }}
        {{-- <input name="naam_plaatser" type="text" placeholder="naam"><br>        --}}
        <input name="type_hulpvraag" type="text" placeholder="type hulp vraag"><br>       
        <input name="beschrijving_hulpvraag" type="text" placeholder="beschrijving gevraagde hulp"><br>
        <button type="submit">Voeg de hulpvraag toe</button>
    </form>
</html>