<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p>
                <input type="text" name="nombre" autofocus="autofocus" required="required" placeholder="nombre">
            </p>

            <label for="apellidos">Apellidos:</label>
            <p>
                <input type="text" name="apellidos" disabled="disabled" placeholder="apellidos">
            </p>

            <label for="boton">Boton:</label>
            <p>
                <input type="button" name="boton" value="boton" disabled="disabled">
            </p>

            <label for="sexo">Sexo:</label>
            <p>
                Hombre: <input type="checkbox" name="sexo"  value="hombre" checked="checked">
                Mujer: <input type="checkbox" name="sexo" disabled="disabled" value="mujer">
            </p>

            <label for="color">Color:</label>
            <p>
                <input type="color" name="color">
            </p>

            <label for="fecha">Fecha:</label>
            <p>
                <input type="date" name="fecha">
            </p>

            <label for="correo">Correo:</label>
            <p>
                <input type="email" name="correo">
            </p>

            <label for="archivo">Archivo:</label>
            <p>
                <input type="file" name="archivo" multiple="multiple">
            </p>

            <label for="numero">Número:</label>
            <p>
                <input type="number" name="numero" multiple="multiple">
            </p>

            <label for="contraseña">Contraseña:</label>
            <p>
                <input type="password" name="contraseña" multiple="multiple">
            </p>

            <label for="continente">Continente:</label>
            <p>
                America del sur<input type="radio" name="continente" value="America del sur">
                Europa<input type="radio" name="continente" value="Europa">
                Africa<input type="radio" name="continente" value="Africa">
            </p>

            <label for="web">Web:</label>
            <p>
                <input type="url" name="web" multiple="multiple">
            </p>

            <textarea></textarea> <br>

            Peliculas:
            <select name="peliculas">
                <option name="spiderman">Spiderman</option>
                <option name="maravilla">La mujer maravilla</option>
                <option name="estafa">La gran estafa</option>
            </select>
            <br>

            <input type="submit" value="enviar">
        </form>
    </body>
</html>
