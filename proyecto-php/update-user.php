<?php

if (isset($_POST['submit'])) {
    // Conexión a la base de datos
    require_once 'includes/conection.php';

    // Recogemos los valores del formulario de registro
    $name = isset($_POST['name']) ? mysqli_real_escape_string($connect, $_POST['name']) : false;
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($connect, $_POST['lastname']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($connect, trim($_POST['email'])) : false;

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

    if (count($errors) == 0) { //si no se detectó ningún error se procede a guardar los datos
        $current_user = $_SESSION['login'];
//        Comprobar si el email ya existe
        $sql = "SELECT email FROM usuarios WHERE email = '$email';";

        $data = mysqli_query($connect, $sql);
        $user = mysqli_fetch_assoc($data);

        if ($user['id'] == $current_user['id'] || empty($user)) {
            // Actualizamos datos  en la tabla usuarios
            $consulta = "UPDATE usuarios SET nombre = '$name', apellidos = '$lastname', email = '$email', fecha = CURRENT_DATE WHERE id = '{$user['id']}';";

            $insert = mysqli_query($connect, $consulta);

            if ($insert) {
                $_SESSION['login']['nombre'] = $name;
                $_SESSION['login']['apellidos'] = $lastname;
                $_SESSION['login']['email'] = $email;
                $_SESSION['complete'] = "Datos actualizados con éxito";
            } else {
                $_SESSION['errors']['generic'] = "Fallo al actualizar el usuario";
            }
        } else {
            $_SESSION['errors']['generic'] = "El usuario ya existe";
        }
    } else {
        $_SESSION['errors'] = $errors;
    }
}

header('Location: mis-datos.php');