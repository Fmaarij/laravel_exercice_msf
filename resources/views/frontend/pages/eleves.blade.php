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
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>

    </div>
@endsection
