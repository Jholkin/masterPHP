<?php
$error = true;

if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['age'])
    && !empty($_POST['email']) && !empty($_POST['password']))
{
    $error = false;
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
} else {
    header("Location: index.blade.php?error=$error");
}

?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Validación de formularios en PHP</title>
</head>
<body>
    <?php if (!$error) : ?>
        <h1>Datos validados correctamente</h1>
        <p><?=$name?></p>
        <p><?=$lastname?></p>
        <p><?=$age?></p>
        <p><?=$email?></p>
    <?php endif; ?>
</body>
</html>
