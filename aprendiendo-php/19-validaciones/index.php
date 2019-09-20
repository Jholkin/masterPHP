<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validación de formularios en PHP</title>
    </head>
    <body>
        <h1>Validar formularios en php</h1>

        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error) {
                echo '<strong style="color:red">Llene todos los campos en el formulario</strong>';
            }
        }
        ?>

        <form method="post" action="procesar_formulario.php">
            <label for="name">Nombre</label><br>
            <input type="text" name="name" required="required" pattern="[A-Za-z]+"><br>

            <label for="lastname">Apellidos</label><br>
            <input type="text" name="lastname" required="required" pattern="[A-Za-z]+"><br>

            <label for="age">Edad</label><br>
            <input type="number" name="age" required="required" pattern="[0-9]+"><br>

            <label for="email">Correo</label><br>
            <input type="email" name="email" required="required"><br>

            <label for="password">Contraseña</label><br>
            <input type="password" name="password" required="required"><br>

            <input type="submit" value="enviar">
        </form>
    </body>
</html>
