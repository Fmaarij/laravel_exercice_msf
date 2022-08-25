
<h1>Update batiment</h1>
<div class="updatebatiment">
    <form action="{{$dbbatiment->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input type="text" name="nom" value="{{$dbbatiment->nom}}">
        <button type="submit">Update</button>
    </form>
</div>
