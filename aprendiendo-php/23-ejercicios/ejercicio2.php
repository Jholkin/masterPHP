<?php
/*
 * Debe tener una funcion
 * Debe validar un email con filter_vail
 * Recoger variable por GET y validarla
 * mostrar el resultado
 */


function validarEmail($email) {
    $status = "no valido";

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "valido";
    }

    return $status;
}

if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']);
} else {
    echo "pasa por get un email";
}

