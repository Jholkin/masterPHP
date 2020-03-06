<?php

// iniciar la sesion y la conexión con la bd
require_once 'includes/conection.php';

// recoger datos del formulario
if (isset($_POST)) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // consulta para comprobar los datos del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $user = mysqli_query($connect, $sql);

    if ($user && mysqli_num_rows($user) == 1) {
        $userdata = mysqli_fetch_assoc($user);

        // comprueba la contraseña
        if (password_verify($password,$userdata['password'])) {
//            Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['login'] = $userdata;
        }else {
//            Si algo falla enviar una sesion con el fallo
            $_SESSION['login_failed'] = "Login incorrecto";
        }
    }else {
        $_SESSION['login_failed'] = "Login incorrecto";
    }
}

// Redirigir al index
header('Location: index.php');
