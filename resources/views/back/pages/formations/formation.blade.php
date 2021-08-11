@extends("back.template.index")
@section('content')
    <h1><strong>Id: </strong>{{ $formation->id }}</h1>
    <h1><strong>Nom: </strong>{{ $formation->nom }}</h1>
    <h1><strong>Description: </strong>{{ $formation->description }}</h1>
@endsection
