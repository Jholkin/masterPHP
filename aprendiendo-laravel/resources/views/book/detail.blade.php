<h1>{{ $book->title }}</h1>

<p>{{ $book->doi }}</p>

<a href="{{action('BookController@delete', ['id' => $book->id])}}" >Eliminar</a>
<a href="{{action('BookController@edit', ['id' => $book->id])}}">Editar</a>