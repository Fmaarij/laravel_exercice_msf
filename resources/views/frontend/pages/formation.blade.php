@extends('frontend.layouts.index')
@section('content')
<h1>DB Type De Formation</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>


    </tr>
    @foreach ($formations as $formation )
        <tr>
            <td>{{$formation->id}}</td>
            <td>{{$formation->nom}}</td>
        </tr>
    @endforeach
</table>
@endsection
