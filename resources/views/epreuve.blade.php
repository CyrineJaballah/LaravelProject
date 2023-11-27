@extends('template')

@section('title')
    Epreuve
@endsection

@section('contenu')
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numéro</th>
                    <th>Date</th>
                    <th>ID mat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($epreuves as $epreuve)
                    <tr>
                        <td>
                            {{ $epreuve->id }}
                        </td>
                        <td>
                            {{ $epreuve->nom }}
                        </td>
                        <td>
                            {{ $epreuve->date }}
                        </td>
                        <td>
                            {{ $epreuve->matiere_id }}
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/epreuve/{{ $epreuve->id }}/edit">Edit</a>
                            <form action="{{ route('epreuve.destroy', ['epreuve' => $epreuve]) }}" method="post"
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
        <input type="button" value="Ajouter Epreuve" onclick="window.location.href='{!! url('/epreuve/create') !!}'"
            class="btn btn-primary" />
    </div>
@endsection
