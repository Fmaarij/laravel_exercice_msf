@extends('frontend.layouts.index')
@section('content')
    <div class="container">
        <div class="showdbbatiment">
            <h1>BD Batiments</h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($dbBatiment as $batiment)
                    <tr>
                        <td>{{ $batiment->id }}</td>
                        <td>{{ $batiment->nom }}</td>
                        <td>{{ $batiment->description }}</td>
                        <td>
                            <a href="editbatiment/{{ $batiment->id }}">
                                <button class="bg-warning border rounded">Edit</button>
                            </a>
                        </td>
                        <form action="/{{ $batiment->id }}/deleet" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button class="bg-danger border rounded">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <div class="addbatiment">
            <h1>Ajouter une batiment</h1>
            <form action="/createBatiment" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom</label>
                <input type="text" name="nom">

                <label for="">Description</label>
                <input type="text" name="description">

                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
