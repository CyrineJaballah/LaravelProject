@extends('template')
@section('title')
    Epreuve
@endsection
@section('contenu')
<!--<form method="POST" action="{{ route('epreuves.store') }}">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="description">Description :</label>
    <input type="date" name="date" id="date" required>
    <button type="submit">Ajouter Epreuve</button>
</form>-->
<form method="POST" >
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>
    <br>
    <label for="date">Date:</label>
    <input type="date" name="date" id="date" required>
    <br>
    <button type="submit" name="action" value="epreuve">Add Epreuve</button>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($epreuves as $ep)
            <tr>
                <td>{{ $ep->id }}</td>
                <td>{{ $ep->nom }}</td>
                <td>{{ $ep->date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
