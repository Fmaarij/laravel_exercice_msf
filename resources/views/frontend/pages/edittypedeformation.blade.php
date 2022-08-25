
<h1>Update </h1>
<div class="updatetypedeformation">
    <form action="{{$dbtypedeformation->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input type="text" name="nom" value="{{$dbtypedeformation->nom}}">
        <button type="submit">Update</button>
    </form>
</div>
