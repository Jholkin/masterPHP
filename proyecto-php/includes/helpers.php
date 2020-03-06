<?php

function mostrarError($errors, $campo)
{
    $alert = '';
    if (isset($errors[$campo]) && !empty($campo)) {
        $alert = "<div class='alert alert-error'>".$errors[$campo]."</div>";
    }

    return $alert;
}

function borrarError()
{
    $borrado = false;
    if (isset($_SESSION['errors'])) {
        $_SESSION['errors'] = null;
        $borrado = session_unset();
    }

    if (isset($_SESSION['complete'])) {
        $_SESSION['complete'] = null;
        $borrado = session_unset();
    }
    return $borrado;
}

function getCategories($connect) {
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($connect, $sql);

    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >=1) {
        $result = $categorias;
    }

    return $result;
}

function getEntradas($connect) {
    $sql = "SELECT e.*, c.nombre AS categoria  FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ORDER BY e.id DESC";
    $entradas = mysqli_query($connect, $sql);
//    var_dump($entradas);
//    die();

    $result = array();
    if ($entradas && mysqli_num_rows($entradas) > 0) {
        $result = $entradas;
    }

    return $result;
}