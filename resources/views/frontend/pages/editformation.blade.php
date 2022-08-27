@extends('frontend.layouts.index')
@section('content')
    <div class="updateformation mt-5 mb-5 container ">
        <h1 class="fs-3 mb-5">Ajouter une formation</h1>
        <form action="/editformation/{{ $formations->id }}/update" method="post" enctype="multipart/form-data" class="mt-5">
            @csrf
            @method('PUT')
            <label for="">Nom </label>
            <input class="bg-gray-200" type="text" name="nom" value="{{ $formations->nom }}">
            <label for="">Description </label>
            <input class="bg-gray-200" type="text" name="description" value="{{ $formations->description }}">
            <button class="bg-blue-500 rounded text-white p-1" type="submit">Update</button>
        </form>
    </div>
@endsection
