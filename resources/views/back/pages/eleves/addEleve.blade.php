@extends("back.template.index")
@section('content')
    <div class="container mx-auto">
        <form class="d-flex flex-column justify-content-center" action="/backend/eleve"
            method="POST">
            @csrf
            @method('POST')
            <input placeholder="Nom" type="text" name="nom" id="">
            <input placeholder="Description" type="text" name="prenom" id="">
            <input placeholder="Age" type="text" name="age" id="">
            <input placeholder="Etat" type="text" name="etat" id="">
            <input type="submit" value="Sauvegarder" class="btn btn-primary text-white">
        </form>
    </div>
@endsection
