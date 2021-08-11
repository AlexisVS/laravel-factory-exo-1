@extends("back.template.index")
@section('content')
    <h1><strong>Id: </strong>{{ $eleve->id }}</h1>
    <h1><strong>Nom: </strong>{{ $eleve->nom }}</h1>
    <h1><strong>Prenom: </strong>{{ $eleve->prenom }}</h1>
    <h1><strong>Age: </strong>{{ $eleve->age }}</h1>
    <h1><strong>Etat: </strong>{{ $eleve->etat }}</h1>
@endsection
