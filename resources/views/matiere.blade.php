@extends('template')
@section('title')
    Matiere
@endsection
@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Coef</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matieres as $matiere)
                <tr>
                    <td>
                        {{ $matiere->id }}
                    </td>
                    <td>
                        {{ $matiere->libelleMat }}
                    </td>
                    <td>
                        {{ $matiere->coefMat }}
                    </td>
                    <td>
                        <a href="/matiere/{{ $matiere->id }}/edit" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('matiere.destroy', ['matiere' => $matiere]) }}" method="post"
                            class="Formulaire">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <input type="button" class="btn btn-primary" value="Ajouter Matiere"
        onclick="window.location.href='{!! url('/matiere/create') !!}'" />
    </div>
@endsection
