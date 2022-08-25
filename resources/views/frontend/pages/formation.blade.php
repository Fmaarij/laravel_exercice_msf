@extends('frontend.layouts.index')
@section('content')
    <div class="container">
        <div class="showDB">
            <h1>DB Type De Formation</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($formations as $formation)
                    <tr>
                        <td>{{ $formation->id }}</td>
                        <td>{{ $formation->nom }}</td>
                        <td>
                            <a href="editformation/{{ $formation->id }}">
                                <button>Edit</button>
                            </a>
                        </td>
                        <form action="{{$formation->id }}/delete" method="post">
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
            <h1>Ajouter un  formation</h1>
            <form action="create" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom </label>
                <input type="text" name="nom">
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
