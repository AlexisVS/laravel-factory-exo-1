@extends("back.template.index")
@section('content')
    <div class="container mx-auto">
        <form class="d-flex flex-column justify-content-center" action="/backend/type-formation"
            method="POST">
            @csrf
            @method('POST')
            <input placeholder="Nom" type="text" name="nom" id="">
            <input type="submit" value="Sauvegarder" class="btn btn-primary text-white">
        </form>
    </div>
@endsection
