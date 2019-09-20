<?php

$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];
$tipo = $archivo['type'];

// var_dump($archivo);
// die();

if ($tipo == "image/jpg" || $tipo == "image/jpge" || $tipo == "image/png" || $tipo == "image/gif") {
    
    if (!is_dir("images")) {// Comprobamos que no exista el directorio images
        mkdir("images"); // Creamos el directorio images
    }

    // Movemos el archivo subido del espacio temporal al directior creado
    move_uploaded_file($archivo['tmp_name'],"images/".$nombre);

    header("Refresh: 5; URL=index.blade.php");
    echo "<h1>Subiendo imagen...</h1>";
} else {
    header("Refresh: 5; URL=index.blade.php");
    echo "<h1>Sube una imagen con una extensión válida</h1>";
}