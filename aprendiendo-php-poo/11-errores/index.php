<?php

try {
    if (isset($_GET['id'])) {
        echo "El parámetro es: ".$_GET['id'];
    } else {
        throw new Exception("Faltan datos");
    }

} catch (Exception $exception) {
    echo "Ha ocurrido un error. " . $exception->getMessage();
}