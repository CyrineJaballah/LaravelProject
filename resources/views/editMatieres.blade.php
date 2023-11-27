@extends("template")
@section("title")
    Editer
@endsection
@section("contenu")
<!--how to edit a record from the database-->
<div>
    <form method="POST" action={{route('matiere.update',['matiere'=>$matieres])}}>
        @csrf
        @method('PUT')
        <input type="text" style="display:none" value="{{$matieres->id}}" />
        <div class="form-group">
        <label for="Libelle">Libellé</label>
        <input type="text" name="libelleMat"  placeholder="Libelle" value="{{$matieres->libelleMat}}">
        </div>
        <div class="form-group">
        <label for="Coef">Coef</label>
        <input type="text" name="coefMat"placeholder="Coef" value="{{$matieres->coefMat}}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>

@if ($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
@endsection
