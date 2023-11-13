@extends('template')
@section('title')
    Matiere
@endsection
@section('contenu')

<
<div>
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
                    <td>
                        {{ $matiere->id }}
                    </td>
                    <td>
                        {{ $matiere->libelleMat }}
                    </td>
                    <td>
                        {{ $matiere->coefMat }}
                    </td>
                </tr>
            @endforeach

        </tbody>
</div>

    @endsection
