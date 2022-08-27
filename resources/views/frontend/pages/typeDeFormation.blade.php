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
        <div class="addtypdeformation mt-5 mb-5 ">
            <h1 class="fs-3 mb-5">Ajouter un type de formation</h1>
            <form action="create" method="post" enctype="multipart/form-data" class="mb-5">
                @csrf
                <label for="">Nom </label>
                <input class="bg-gray-200"   type="text" name="nom">
                <button class="bg-blue-500 rounded text-white p-1" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
