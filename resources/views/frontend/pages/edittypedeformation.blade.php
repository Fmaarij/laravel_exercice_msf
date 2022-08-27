@extends('frontend.layouts.index')
@section('content')
<div class="addtypdeformation mt-5 mb-5 ">
    <h1 class="fs-3 mb-5">Update type de formation</h1>
    <form action="{{ $dbtypedeformation->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input class="bg-gray-200" type="text" name="nom" value="{{ $dbtypedeformation->nom }}">
        <button class="bg-blue-500 rounded text-white p-1" type="submit">Update</button>
    </form>
</div>
@endsection
