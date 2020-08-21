@if (isset($book) && is_object($book))
    <h1>Editar Libro</h1>
@else
    <h1>Agregar un Libro</h1>
@endif

<form action="{{ isset($book) ? action('BookController@update') : action('BookController@save') }}" method="post">
    {{ csrf_field() }}

    @if (isset($book) && is_object($book))
        <input type="hidden" name="id" value=" {{$book->id}} ">
    @endif

    <label for="title">Titulo: </label>
    <input type="text" name="title" value=" {{isset($book) ? $book->title : ''}} ">
    <br>
    <label for="doi">DOI: </label>
    <input type="text" name="doi" value=" {{isset($book) ? $book->doi : ''}} ">
    <br>
    <input type="submit" value="Guardar">
</form>
