<?php

if (isset($_POST)) {
    require_once 'includes/conection.php';

    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($connect, $_POST['name']) : false;

    // Array de errores
    $errors = array();

    // validamos los datos antes de guardarlos en la base de datos
    // validamos campo name
    if (empty($nombre) || is_numeric($nombre) || preg_match("/[0-9]/",$nombre)) {
        $errors['name'] = "nombre invalido";
    }

    if (count($errors) == 0) {
        $sql = "INSERT INTO categorias VALUES (null, '$nombre');";

        $guardar = mysqli_query($connect, $sql);
    }
}

header('Location: index.php');