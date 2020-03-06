<?php

/*
 * para mostrar la cookie se usa $_COOKIE, que es una variable superglobla y es un array asociativo
 */

//primero comprobamos si existen cookies
if (isset($_COOKIE['micookie'])) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
} else {
    echo "no existe el cookie";
}
?>

<a href="borrar_cookie.php">Borrar cookie</a>
