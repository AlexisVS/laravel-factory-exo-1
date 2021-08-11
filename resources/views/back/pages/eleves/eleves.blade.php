@extends("back.template.index")
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Etat</th>
                <th scope="col"></th>
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
                    <td class="d-flex">
                        <a href="/backend/eleve/{{ $eleve->id }}" class="btn btn-primary text-white">SHOW</a>
                        <a href="/backend/eleve/{{ $eleve->id }}/edit"
                            class="btn btn-success text-white mx-3">EDIT</a>
                        <form action="/backend/eleve/{{ $eleve->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="X" class="btn btn-danger text-white">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/backend/eleve/create" class="btn btn-primary text-white">Ajouter un eleve</a>
@endsection
