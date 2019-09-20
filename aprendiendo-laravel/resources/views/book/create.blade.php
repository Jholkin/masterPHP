<h1>Agregar un Libro</h1>

<form action="{{ action('BookController@save') }}" method="post">
    {{ csrf_field() }}
    <label for="title">Titulo: </label>
    <input type="text" name="title">
    <br>
    <label for="doi">DOI: </label>
    <input type="text" name="doi">
    <br>
    <input type="submit" value="Guardar">
</form>
