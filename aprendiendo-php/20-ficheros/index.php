<?php

/*
 * Permisos:
 * r -> lectura
 * a+ -> lectura y escritura
 * 
*/
// Abrimos el archivo
$archivo = fopen("fichero_texto.txt","a+");
// Leemos el archivo
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

// Escribir en el archivo
fwrite($archivo, "soy una parrafo metido desde php");

// Cerramos el archivo
fclose($archivo);

// Copiar fichero
copy("fichero_texto.txt", "ficherp_copia.txt") or die("Error al copiar");

// Renombrar fichero
rename("fichero_texto.txt", "fichero_renombrado.txt");

// Eliminar fichero
unlink("fichero_renombrado.txt") or die("Error al borrar");

// Comprobar si un fichero existe
if (file_exists("fichero_texto.txt")) {
    echo "El archivo existe";
} else {
    echo "El archivo no existe";
}