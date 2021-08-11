@extends('template.index')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Etat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $eleve)
                <tr>
                    <th scope="row">{{ $eleve->id }}</th>
                    <td>{{ $eleve->nom }}</td>
                    <td>{{ $eleve->prenom }}</td>
                    <td>{{ $eleve->age }}</td>
                    <td>{{ $eleve->etat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
