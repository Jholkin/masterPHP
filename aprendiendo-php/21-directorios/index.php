<?php

// Creación del directorio
if (!is_dir("carpeta_creada_desde_php")) {
    mkdir("carpeta_creada_desde_php", 0777) or die("No se puede crear la carpeta");
} else {
    echo "El directorio ya existe";
}

// Elimar directorio
rmdir("carpeta_creada_desde_php");


