@extends('template')
@section('title')
    Ajouter
@endsection
@section('contenu')
    <div>
        <form method="POST" action={{route('epreuve.store')}}>
            @csrf
            <label for="numepreuve">Num Epreuve:</label>
            <input type="text" name="numepreuve" id="numepreuve" required>
            <br>
            <label for="datepreuve">Date Epreuve:</label>
            <input type="date" name="datepreuve" id="datepreuve" required>
            <br>
            <label for="matiere_id">Matiere ID:</label>
            <select name="matiere_id">
                @foreach ($matieres as $epreuve)
                    <option value="{{$epreuve->id}}">{{$epreuve->libelleMat }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Ajouter Epreuve</button>
        </form>
    </div>
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
@endsection
