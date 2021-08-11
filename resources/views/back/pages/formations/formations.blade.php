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
            @foreach ($formations as $formation)
                <tr>
                    <th scope="row">{{ $formation->id }}</th>
                    <td>{{ $formation->nom }}</td>
                    <td>{{ $formation->description }}</td>
                    <td class="d-flex">
                        <a href="/backend/formation/{{ $formation->id }}" class="btn btn-primary text-white">SHOW</a>
                        <a href="/backend/formation/{{ $formation->id }}/edit"
                            class="btn btn-success text-white mx-3">EDIT</a>
                        <form action="/backend/formation/{{ $formation->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="X" class="btn btn-danger text-white">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/backend/formation/create" class="btn btn-primary text-white">Ajouter un formation</a>
@endsection
