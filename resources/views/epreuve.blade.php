@extends('template')

@section('title')
    Epreuve
@endsection

@section('contenu')
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Date</th>
                    <th>ID mat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($epreuves as $epreuve)
                    <tr>
                        <td>
                            {{ $epreuve->nom }}
                        </td>
                        <td>
                            {{ $epreuve->date }}
                        </td>
                        <td>
                            {{ $epreuve->matiere_id }}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection
