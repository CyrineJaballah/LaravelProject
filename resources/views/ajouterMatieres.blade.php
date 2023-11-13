@extends('template')

@section('title')
    Matieres
@endsection

@section('contenu')
    <div>
        <form method="POST" action="/ajouterMatieres">
            @csrf
            <label for="codemat">Code Matiere (Max 5 characters):</label>
            <input type="text" name="codemat" id="codemat" required maxlength="5">
            <br>
            <label for="libelle">Libelle:</label>
            <input type="text" name="libelle" id="libelle" required>
            <br>
            <label for="coef">Coef (Between 1 and 5):</label>
            <input type="number" name="coef" id="coef" required min="1" max="5">
            <br>
            <button type="submit">Ajouter Matiere</button>
        </form>
    </div>
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
@endsection
