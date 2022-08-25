@extends('frontend.layouts.index')
@section('content')
<h1>DB Type De Formation</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>


    </tr>
    @foreach ($dbtypedeformation as $type )
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->nom}}</td>
        </tr>
    @endforeach
</table>
@endsection
