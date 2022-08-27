@extends('frontend.layouts.index')
@section('content')
    <div class="container">
        <div class="affichageDB">
            <h1>DB Eleves</h1>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>Age</th>
                    <th>Etat</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach ($dbEleves as $eleve)
                    <tr>
                        <td>{{ $eleve->id }}</td>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->age }}</td>
                        <td>{{ $eleve->etat }}</td>
                        <td>
                            <a href="/editeleve/{{ $eleve->id }}">
                                <button class="bg-warning border rounded">Edit</button>
                            </a>
                        </td>
                        <form action="/{{ $eleve->id }}/deleleve" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button class="bg-danger border rounded">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <div class="addeleve mt-5 mb-5 ">
            <h1 class="fs-3 mb-5">Ajouter un eleve</h1>
            <form action="createeleve" method="post" enctype="multipart/form-data" class=" mb-5" >
                @csrf
                <label for="">Nom </label>
                <input class="bg-gray-200"  type="text" name="nom">
                <label for="">Prenom </label>

                <input class="bg-gray-200" type="text" name="prenom" va>
                <label for="">Age </label>
                <input class="bg-gray-200" type="number" name="age">
                <select class="bg-gray-200" name="etat" id="">
                    <option class="bg-gray-200" value="0">En formation</option>
                    <option class="bg-gray-200" value="1">Pas en formation</option>
                </select>
                <button class="bg-blue-500 rounded text-white p-1" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
