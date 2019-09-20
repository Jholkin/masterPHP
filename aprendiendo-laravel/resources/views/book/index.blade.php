<h1>List of Books</h1>
<a href="{{ action('BookController@create') }}">Agregar Libro</a>
<ul>
    @foreach($books as $book)
        <li>
            <a href="{{ action('BookController@detail', ['id' => $book->id]) }}">
                Title: {{ $book->title }}
            </a>
        </li>
    @endforeach
</ul>
