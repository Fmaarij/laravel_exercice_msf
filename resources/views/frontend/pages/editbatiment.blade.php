@extends('frontend.layouts.index')
@section('content')
<div class="addbatiment mt-5 mb-5 ">
    <h1 class="fs-3 mb-5">Update le batiment</h1>
    <form action="{{ $dbBatiment->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input class="bg-gray-200" type="text" name="nom" value="{{ $dbBatiment->nom }}">

        <label for="">Description </label>
        <input class="bg-gray-200" type="text" name="description" value="{{ $dbBatiment->description }}">
        <button class="bg-blue-500 rounded text-white p-1" type="submit">Update</button>
    </form>
</div>
@endsection
