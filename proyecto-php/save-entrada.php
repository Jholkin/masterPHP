<?php

if (isset($_POST)) {
    require_once 'includes/conection.php';

    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($connect, $_POST['name']) : false;
    $descripcion = isset($_POST['description']) ? mysqli_real_escape_string($connect, $_POST['description']) : false;
    $categoria = isset($_POST['category']) ? $_POST['category'] : false;
    $user = $_SESSION['login']['id'];

    // Array de errores
    $errors = array();

    // validamos los datos antes de guardarlos en la base de datos
    // validamos campo name
    if (empty($nombre) || is_numeric($nombre) || preg_match("/[0-9]/",$nombre)) {
        $errors['name'] = "nombre invalido";
    }

    if (empty($descripcion)) {
        $errors['description'] = "descripción inválida";
    }

    if (empty($categoria)) {
        $errors['category'] = "categoría vacía";
    }

    if (count($errors) == 0) {
        if (isset($_GET['editar'])) {
            $entrada_id = $_GET['editar'];
            $sql = "UPDATE entradas SET titulo = '$nombre', descripcion = '$descripcion', categoria_id = '$categoria' WHERE id = '$entrada_id' AND usuario_id = '$user';";
        }else {
            $sql = "INSERT INTO entradas VALUES (null,'$user','$categoria','$nombre','$descripcion', CURDATE());";
        }

        $guardar = mysqli_query($connect, $sql);

        header('Location: index.php');
    }else {
        $_SESSION['errores_entrada'] = $errors;
        header('Location: crear-entrada.php');
    }
}