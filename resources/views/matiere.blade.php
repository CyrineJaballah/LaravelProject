@extends('template')
@section('title')
    Matiere
@endsection
@section('contenu')
<form method="POST" >
    @csrf
    <label for="libelle">Libelle:</label>
    <input type="text" name="nom" id="nom" required>
    <br>
    <label for="coef">Coef:</label>
    <input type="number" name="number" id="number" required>
    <br>
    <button type="submit" name="action" value="epreuve">Add Matiere</button>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>Coef</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($matieres as $matiere)
            <tr>
                <td>{{ $matiere->id }}</td>
                <td>{{ $matiere->libelleMat }}</td>
                <td>{{ $matiere->coefMat }}</td>
            </tr>
            @endforeach
        </tbody>
</table>



    @endsection
