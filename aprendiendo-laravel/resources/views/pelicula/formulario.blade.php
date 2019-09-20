<h1>Formulario en Laravel</h1>
<form method="post" action="{{ action('PeliculaController@recibir') }}">
    {{ csrf_field() }}
    <label for="name">Nombre</label><br>
    <input type="text" name="name"><br>

    <label for="email">Correo</label><br>
    <input type="email" name="email"><br>

    <input type="submit" value="Enviar">
</form>
