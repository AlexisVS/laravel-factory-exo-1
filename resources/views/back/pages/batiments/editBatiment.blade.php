@extends("back.template.index")
@section('content')
    <div class="container mx-auto">
        <form class="d-flex flex-column justify-content-center" action="/backend/batiment/{{ $batiment->id }}"
            method="POST">
            @csrf
            @method('PUT')
            <input value="{{ $batiment->nom }}" type="text" name="nom" id="">
            <input value="{{ $batiment->description }}" type="text" name="description" id="">
            <input type="submit" value="Sauvegarder" class="btn btn-primary text-white">
        </form>
    </div>
@endsection
