@extends('frontend.layouts.index')
@section('content')
    <div class="container">
        <div class="affichageDB">
            <h1>DB Eleves</h1>
            <table>
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
                            <a href="editeleve/{{$eleve->id }}">
                                <button>Edit</button>
                            </a>
                        </td>
                        <form action="{{ $eleve->id }}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button class="bg-danger border rounded">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <div class="addeleve">
            <h1>Ajouter un eleve</h1>
            <form action="create" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom </label>
                <input type="text" name="nom">
                <label for="">Prenom </label>
                <input type="text" name="nom" va>
                <label for="">Age </label>
                <input type="number" name="age">
                <label for="">Etat </label>
                <input type="boolean" name="etat" >
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
