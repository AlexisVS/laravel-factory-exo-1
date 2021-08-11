@extends("back.template.index")
@section('content')
    <h1><strong>Id: </strong>{{ $batiment->id }}</h1>
    <h1><strong>Nom: </strong>{{ $batiment->nom }}</h1>
    <h1><strong>Description: </strong>{{ $batiment->description }}</h1>
@endsection
