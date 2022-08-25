<h1>Update batiment</h1>
<div class="updatebatiment">
    <form action="{{ $dbBatiment->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input type="text" name="nom" value="{{ $dbBatiment->nom }}">

        <label for="">Description </label>
        <input type="text" name="description" value="{{ $dbBatiment->description }}">
        <button type="submit">Update</button>
    </form>
</div>
