@extends("back.template.index")
@section('content')
    <h1><strong>Id: </strong>{{ $typeFormation->id }}</h1>
    <h1><strong>Nom: </strong>{{ $typeFormation->nom }}</h1>
    <h1><strong>Description: </strong>{{ $typeFormation->description }}</h1>
@endsection
