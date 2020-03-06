<?php

if (isset($_POST['submit'])) {
    // Conexión a la base de datos
    require_once 'includes/conection.php';

    // Iniciamos la sesión
    if (!isset($_SESSION)) {
        session_start();
    }

    // Recogemos los valores del formulario de registro
    $name = isset($_POST['name']) ? mysqli_real_escape_string($connect, $_POST['name']) : false;
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($connect, $_POST['lastname']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($connect, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($connect, trim($_POST['password'])) : false;

    // Array de errores
    $errors = array();

    // validamos los datos antes de guardarlos en la base de datos
    // validamos campo name
    if (empty($name) || is_numeric($name) || preg_match("/[0-9]/",$name)) {
        $errors['name'] = "nombre invalido";
    }

    // validamos el campo apellidos
    if (empty($lastname) || is_numeric($lastname) || preg_match("/[0-9]/",$lastname)) {
        $errors['lastname'] = "apellidos invalidos";
    }

    // validamos campo email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "email no valido";
    }

    // validamos el campo password
    if (empty($password)) {
        $errors['password'] = "rellene el campo password";
    }

    if (count($errors) == 0) { //si no se detectó ningún error se procede a guardar los datos
        // ciframos la contaseña
        $password_cifrada = password_hash($password,PASSWORD_BCRYPT,['cost' => 4]);

        // insertamos datos  en la tabla usuarios
        $consulta = "INSERT INTO usuarios VALUES (null,'$name','$lastname','$email','$password_cifrada', CURRENT_DATE)";
//        var_dump($consulta);
        $insert = mysqli_query($connect, $consulta);

        if ($insert) {
            $_SESSION['complete'] = "El registro se ha completado con éxito";
        } else {
            $_SESSION['errors']['generic'] = "Fallo al guardar el usuario";
        }
    } else {
        $_SESSION['errors'] = $errors;
    }
}

header('Location: index.php');