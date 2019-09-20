@extends('layouts.master')

@section('title', 'master en php')

@section('header')
    {{-- @parent() es para añadir contenido al layout mas no le reemplaza --}}
    @parent()
    <h2>Hola</h2>
@endsection

@section('content')
<h1>Contenido de la página genérica</h1>
@endsection
