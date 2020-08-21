<h1>List of Books</h1>
<a href="{{ action('BookController@create') }}">Agregar Libro</a>

@if (session('status'))
    <small style="background: gray" >{{session('status')}}</small>
@endif

<ul>
    @foreach($books as $book)
        <li>
            <a href="{{ action('BookController@detail', ['id' => $book->id]) }}">
                Title: {{ $book->title }}
            </a>
        </li>
    @endforeach
</ul>
