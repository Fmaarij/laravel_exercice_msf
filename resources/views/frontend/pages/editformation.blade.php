<h1>Update formation</h1>
<div class="updateformation">
    <form action="/editformation/{{ $formations->id }}/update" method="post" enctype="multipart/form-data"  >
        @csrf
        @method('PUT')

        <label for="">Nom </label>
        <input type="text" name="nom" value="{{ $formations->nom }}">

        <label for="">Description </label>
        <input type="text" name="description" value="{{ $formations->description }}">

        <button type="submit">Update</button>
    </form>
</div>
