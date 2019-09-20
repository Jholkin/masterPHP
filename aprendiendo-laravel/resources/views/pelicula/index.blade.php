<h1>{{ $title }}</h1>

@if(isset($page))
    <h3>La pagina es {{ $page }}</h3>
@endif

<a href="{{ route('detalle.pelicula') }}">ir al detalle</a>
