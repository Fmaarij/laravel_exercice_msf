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
        <div class="addbatiment mt-5 mb-5 ">
            <h1 class="fs-3 mb-5">Ajouter un batiment</h1>
            <form action="/createBatiment" method="post" enctype="multipart/form-data" class="mb-5">
                @csrf
                <label for="">Nom</label>
                <input class="bg-gray-200"  type="text" name="nom">

                <label for="">Description</label>
                <input class="bg-gray-200"  type="text" name="description">

                <button class="bg-blue-500 rounded text-white p-1" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
