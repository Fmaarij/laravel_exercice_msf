@extends('frontend.layouts.index')
@section('content')

<div class="addeleve mt-5 mb-5 container ">
    <h1 class="fs-3 mb-5">Update un eleve</h1>
    <form action="{{ $dbEleves->id }}/update" method="post" enctype="multipart/form-data" class=" mb-5">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input class="bg-gray-200"   type="text" name="nom" value="{{ $dbEleves->nom }}">
        <label for="">Prenom </label>
        <input class="bg-gray-200"  type="text" name="prenom" value="{{ $dbEleves->prenom }}">
        <label for="">Age </label>
        <input class="bg-gray-200"   type="number" name="age" value="{{ $dbEleves->age }}">
        <label for="">Etat </label>
        <select class="bg-gray-200" name="etat" id="">
            <option class="bg-gray-200" value="0">En formation</option>
            <option class="bg-gray-200" value="1">Pas en formation</option>
        </select>
        <button class="bg-blue-500 rounded text-white p-1" type="submit">Update</button>
    </form>
</div>
@endsection
