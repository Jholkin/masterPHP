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
        $borrado = true;
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['complete'])) {
        $_SESSION['complete'] = null;
        $borrado = true;
    }
    return $borrado;
}

function getCategories($connect)
{
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($connect, $sql);

    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >=1) {
        $result = $categorias;
    }

    return $result;
}

function getCategory($connect, $id)
{
    $sql = "SELECT * FROM categorias WHERE id = '$id';";
    $categoria = mysqli_query($connect, $sql);

    $result = array();
    if ($categoria && mysqli_num_rows($categoria) >=1) {
        $result = mysqli_fetch_assoc($categoria);
    }

    return $result;
}

function getEntradas($connect, $limit = null, $category = null, $busqueda = null)
{
    $sql = "SELECT e.*, c.nombre AS categoria  FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ";

    if (!empty($category)) {
        $sql .= " WHERE e.categoria_id = '$category'";
    }

    if (!empty($busqueda)) {
        $sql .= " WHERE e.titulo LIKE '%$busqueda%'";
    }

    $sql .= " ORDER BY e.id DESC";

    if ($limit) {
        $sql .= " LIMIT 4";
    }

    $entradas = mysqli_query($connect, $sql);

    $result = array();
    if ($entradas && mysqli_num_rows($entradas) > 0) {
        $result = $entradas;
    }

    return $result;
}

function getEntrada($connect, $id)
{
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id WHERE e.id = '$id';";
    $entrada = mysqli_query($connect,$sql);

    $result = array();

    if ($entrada && mysqli_num_rows($entrada) >= 1) {
        $result = mysqli_fetch_assoc($entrada);
    }

    return $result;
}