@extends('frontend.layouts.index')
@section('content')
    <div class="container">
        <div class="typedeformation">
            <h1>DB Type De Formation</h1>
            <table  class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($dbtypedeformation as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->nom }}</td>
                        <td>
                            <a href="edittypedeformation/{{ $type->id }}">
                                <button class="bg-warning border rounded">Edit</button>
                            </a>
                        </td>

                        <form action="{{ $type->id }}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button class="bg-danger border rounded">Delete</button></td>
                        </form>

                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <h1>Ajouter un type de formation</h1>
        <div class="addtypdeformation">
            <form action="create" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom </label>
                <input type="text" name="nom">
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
