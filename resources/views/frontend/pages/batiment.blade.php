@extends('frontend.layouts.index')
@section('content')
<div class="container">
    <div class="showdbbatiment">
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
                <td>{{ $batiment->id }}</td>
                <td>{{ $batiment->nom }}</td>
                <td>{{ $batiment->nom }}</td>
                <td>
                    <a href="editbatiment/{{ $batiment->id }}">
                        <button>Edit</button>
                    </a>
                </td>
                <form action="{{ $batiment->id }}/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <td><button class="bg-danger border rounded">Delete</button></td>
                </form>
            </tr>
        @endforeach
    </table>
    </div>
    <hr>
    <h1>Ajouter une batiment</h1>
        <div class="addbatiment">
            <form action="create" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom </label>
                <input type="text" name="nom">
                <button type="submit">Ajouter</button>
            </form>
        </div>
</div>
@endsection
