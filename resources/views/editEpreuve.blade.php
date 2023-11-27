@extends('template')
@section('title')
    update-epreuve
@endsection
@section('contenu')
    <div class="container-epreuve">

        <h3 class= "Heading">Modifier Epreuve</h3>

        <form method="post" action={{ route('epreuve.update', $epreuves->id) }}>
            @method('PUT')
            @csrf
            <input type="text" style="display:none" value="{{ $epreuves->id }}" />
            <div class="form-group">
                <input type="text" name="nom" placeholder="nom" value="{{ $epreuves->nom }}">
            </div>
            <div class="form-group">
                <input type="date" name="date" placeholder="Date" value="{{ $epreuves->date }}">
            </div>

            <div class="form-group">
                <select name="matiere_id">
                    @foreach ($matieres as $epreuve)
                        <option value="{{ $epreuve->id }}">{{ $epreuve->libelleMat }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>



    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
@endsection
