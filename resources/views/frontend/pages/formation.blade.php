@extends('frontend.layouts.index')
@section('content')
    <div class="container">
        <div class="showDB">
            <h1>DB Formation</h1>
            <table  class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($formations as $formation)
                    <tr>
                        <td>{{ $formation->id }}</td>
                        <td>{{ $formation->nom }}</td>
                        <td>{{ $formation->description }}</td>
                        <td>
                            <a href="editformation/{{ $formation->id }}">
                                <button class="bg-warning border rounded">Edit</button>
                            </a>
                        </td>
                        <form action="{{ $formation->id }}/delet" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button class="bg-danger border rounded">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <div class="addformation mt-5 mb-5 ">
            <h1 class="fs-3 mb-5">Ajouter une formation</h1>
            <form action="createFormation" method="post" enctype="multipart/form-data" class="mb-5">
                @csrf
                <label for="">Nom </label>
                <input class="bg-gray-200"   type="text" name="nom">
                <label for="">Description </label>
                <input class="bg-gray-200"   type="text" name="description">
                <button class="bg-blue-500 rounded text-white p-1" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
