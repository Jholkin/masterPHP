<?php
/*
 * Cookie: es un fichero que se alamacena en el ordenador del usuario que visita la web con el fin de recordar
 * datos o rastrear cierta información o comportamiento de el mismo en la web
 */

//Creamos cookies
//setcookie("nombre_de_cookie", "valor_de_cookie", caducidad, ruta, dominio);
//cookie básica
setcookie("micookie", "valor de mi cookie");

//cookie con expiracion
setcookie("unyear","valor de mi cookie por 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookie.php">Ver las cookies</a>
