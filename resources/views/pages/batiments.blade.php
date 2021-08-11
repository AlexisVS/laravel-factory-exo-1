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
    @foreach ($batiments as $batiment)
    <tr>
      <th scope="row">{{ $batiment->id }}</th>
      <td>{{ $batiment->nom }}</td>
      <td>{{ $batiment->description }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection