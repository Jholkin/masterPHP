@include('includes.header')

<!-- Imprimir por pantall -->
<h1>{{$title}}</h1>
<h2>{{date('Y')}}</h2>

<!-- Comentarios -->
{{-- esto es un comentario en BLADE --}}

{{-- Condicion ternaria en php --}}
<!--<?= isset($director) ? $director : "no existe director"; ?>-->

{{-- Condicion ternaria en blade --}}
{{-- {{ $director or 'no hay director'  }} --}}

<!-- CONDICIONALES -->
@if($title)
    El titulo existe y es: {{ $title }}
@else
    El titulo no existe
@endif
<hr>
<!-- BUCLES -->
@for($i = 0; $i <= 20; $i++)
    valor de i: {{ $i }} <br>
@endfor
<hr>

@foreach($listado as $pelicula)
    <p>{{ $pelicula }}</p>
@endforeach

@include('includes.footer')
