@extends('frontend.layouts.index')
@section('content')
<h1>BD Batiments</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($dbBatiment as $batiment)
        <tr>
            <td>{{$batiment->id}}</td>
            <td>{{$batiment->nom}}</td>
            <td>{{$batiment->nom}}</td>
        </tr>
    @endforeach
</table>
@endsection
