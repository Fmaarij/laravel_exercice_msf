
<h1>Update eleves</h1>
<div class="updateeleves">
    <form action="{{$dbEleves->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input type="text" name="nom" value="{{$dbEleves->nom}}">
        <label for="">Prenom </label>
        <input type="text" name="nom" value="{{$dbEleves->prenom}}">
        <label for="">Age </label>
        <input type="number" name="age" value="{{$dbEleves->age}}">
        <label for="">Etat </label>
        <input type="boolean" name="etat" value="{{$dbEleves->etat}}">
        <button type="submit">Update</button>
    </form>
</div>
