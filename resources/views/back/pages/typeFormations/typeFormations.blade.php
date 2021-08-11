@extends("back.template.index")
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($typeFormations as $typeFormation)
                <tr>
                    <th scope="row">{{ $typeFormation->id }}</th>
                    <td>{{ $typeFormation->nom }}</td>
                    <td class="d-flex">
                        <a href="/backend/type-formation/{{ $typeFormation->id }}" class="btn btn-primary text-white">SHOW</a>
                        <a href="/backend/type-formation/{{ $typeFormation->id }}/edit"
                            class="btn btn-success text-white mx-3">EDIT</a>
                        <form action="/backend/type-formation/{{ $typeFormation->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="X" class="btn btn-danger text-white">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/backend/type-formation/create" class="btn btn-primary text-white">Ajouter un type de formation</a>
@endsection
