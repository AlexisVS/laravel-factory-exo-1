@extends('template.index')
@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($formations as $formation)
    <tr>
      <th scope="row">{{ $formation->id }}</th>
      <td>{{ $formation->nom }}</td>
      <td>{{ $formation->description }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection