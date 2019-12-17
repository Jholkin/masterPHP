<?php

// iniciar la sesion y la conexión con la bd
require_once 'includes/conection.php';

// recoger datos del formulario
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // consulta para comprobar los datos del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($connect, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        // comprueba la contraseña
        if (password_verify($password,$password_segura));
    }

}

// comprobar la contraseña

// consulta para comprobar las credenciales del usuario
