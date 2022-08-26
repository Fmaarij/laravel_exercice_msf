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
        <div class="addformation">
            <h1>Ajouter un formation</h1>
            <form action="createFormation" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom </label>
                <input type="text" name="nom">
                <label for="">Description </label>
                <input type="text" name="description">
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
