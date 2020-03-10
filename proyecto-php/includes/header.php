<?php
require_once 'conection.php';
require_once 'helpers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="./favicon.png">
    <title>Blog de Videojuegos</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
</head>
<body>
<!-- Cabecera -->
<header id="header">
    <div id="logo">
        <a href="index.php">
            Blog de VideoJuegos
        </a>
    </div>

    <!-- Menu -->
    <nav id="nav">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
                <?php
                    $categorias = getCategories($connect);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                    <li>
                        <a href="category.php?id=<?= $categoria['id'];?>"><?= $categoria['nombre']; ?></a>
                    </li>
                <?php
                        endwhile;
                    endif;
                ?>
            <li>
                <a href="index.php">Sobre mi</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>
<div id="container">