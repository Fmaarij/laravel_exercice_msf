
<h1>Update formation</h1>
<div class="updatetypedeformation">
    <form action="{{$formations->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nom </label>
        <input type="text" name="nom" value="{{$formations->nom}}">
        <button type="submit">Update</button>
    </form>
</div>
