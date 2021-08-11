@extends("back.template.index")
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($batiments as $batiment)
                <tr>
                    <th scope="row">{{ $batiment->id }}</th>
                    <td>{{ $batiment->nom }}</td>
                    <td>{{ $batiment->description }}</td>
                    <td class="d-flex">
                        <a href="/backend/batiment/{{ $batiment->id }}" class="btn btn-primary text-white">SHOW</a>
                        <a href="/backend/batiment/{{ $batiment->id }}/edit"
                            class="btn btn-success text-white mx-3">EDIT</a>
                        <form action="/backend/batiment/{{ $batiment->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="X" class="btn btn-danger text-white">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/backend/batiment/create" class="btn btn-primary text-white">Ajouter un batiment</a>
@endsection
