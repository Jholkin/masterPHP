<?php
/*
 * Sesion: Almacenar y persistir datos del usuario mientras navega en un sitio web hasta que cierra la sesion
 * o cierra el navegador
 */

//Iniciamos la sesion
session_start();

//Variable normal o local
$variable_normal = "soy una variable normal";

//Variable de sesion
$_SESSION['variable_persistente'] = "hola soy una sesion activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];