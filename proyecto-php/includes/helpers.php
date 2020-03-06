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