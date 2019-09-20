<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <li>
                    <a href="index.php">Enlace-1</a>
                </li>
                <li>
                    <a href="index.php">Enlace-2</a>
                </li>
                <li>
                    <a href="index.php">Enlace-3</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="container">
        <!-- Sidebar o Barra lateral -->
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Identificate</h3>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password">

                    <input type="submit" value="entrar">
                </form>
            </div>

            <div id="register" class="block-aside">
                <h3>Registro</h3>
                <form action="register.php" method="post">
                    <label for="name">Nombre</label>
                    <input type="text" name="name">
                    <label for="lastname">Apellidos</label>
                    <input type="text" name="lastname">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password">

                    <input type="submit" name="submit" value="registrar">
                </form>
            </div>
        </aside>

        <!-- Contenido principal -->
    </div>

    <!-- Pie de página -->
</body>
</html>