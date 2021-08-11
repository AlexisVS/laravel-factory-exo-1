@extends('template.index')
@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($typeFormations as $typeFormation)
    <tr>
      <th scope="row">{{ $typeFormation->id }}</th>
      <td>{{ $typeFormation->nom }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection