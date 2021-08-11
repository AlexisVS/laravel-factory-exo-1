@extends("back.template.index")
@section('content')
    <div class="container mx-auto">
        <form class="d-flex flex-column justify-content-center" action="/backend/eleve/{{ $eleve->id }}"
            method="POST">
            @csrf
            @method('PUT')
            <input value="{{ $eleve->nom }}" type="text" name="nom" id="">
            <input value="{{ $eleve->prenom }}" type="text" name="prenom" id="">
            <input value="{{ $eleve->age }}" type="text" name="age" id="">
            <input value="{{ $eleve->etat }}" type="text" name="etat" id="">
            <input type="submit" value="Sauvegarder" class="btn btn-primary text-white">
        </form>
    </div>
@endsection
