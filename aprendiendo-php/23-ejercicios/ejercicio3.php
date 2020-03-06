<?php
/*
 * Hacer una interfaz de usuario (formulario) con 2 inputs y 4 botones, uno para sumar
 * restar, dividir y multiplicar
 */

$resultado = false;
if (isset($_POST['numero1']) && isset($_POST['numero2']))
{
    if (isset($_POST['sumar'])) {
        $resultado = "La suma es: ".($_POST['numero1'] + $_POST['numero2']);
    } elseif (isset($_POST['restar'])) {
        $resultado = "La resta es: ".($_POST['numero1'] - $_POST['numero2']);
    } elseif (isset($_POST['multiplicar'])) {
        $resultado = "La multiplicacion es: ".($_POST['numero1'] * $_POST['numero2']);
    } elseif (isset($_POST['dividir'])) {
        $resultado = "La division es: ".($_POST['numero1'] / $_POST['numero2']);
    }
}

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calulador en PHP</h1>
        <form action="ejercicio3.php" method="post">
            <label>Numero 1: </label>
            <input type="number" name="numero1"><br>
            <label>Numero 2: </label>
            <input type="number" name="numero2"><br>

            <input type="submit" value="sumar" name="sumar">
            <input type="submit" value="restar" name="restar">
            <input type="submit" value="multiplicar" name="multiplicar">
            <input type="submit" value="dividir" name="dividir">
        </form>
        <?php
            if ($resultado != false) :
                echo "<h2>el resultado es:".$resultado."</h2>";
            endif;
        ?>
    </body>
</html>
