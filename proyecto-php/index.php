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
        <div class="clearfix"></div>
    </header>

    <div id="container">
        <!-- Sidebar o Barra lateral -->
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Inicio de sesión</h3>
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
        <div id="principle">
            <h1>Últimas entradas</h1>
            <article class="input">
                <a href="#">
                <h2>Título de mi entrada</h2>
                <p>Nulla sodales quis sapien vel efficitur. Pellentesque at leo justo. Sed
                    eros consequat sed. Maecenas ligula mi, consectetur ut semper vitae, rhoncus
                </p>
                </a>
            </article>
            <article class="input">
                <a href="#">
                <h2>Título de mi entrada</h2>
                    <p>Nulla sodales quis sapien vel efficitur. Pellentesque at leo justo. Sed
                        eros consequat sed. Maecenas ligula mi, consectetur ut semper vitae, rhoncus
                    </p>
                </a>
            </article>
            <article class="input">
                <a href="#">
                <h2>Título de mi entrada</h2>
                    <p>Nulla sodales quis sapien vel efficitur. Pellentesque at leo justo. Sed
                        eros consequat sed. Maecenas ligula mi, consectetur ut semper vitae, rhoncus
                    </p>
                </a>
            </article>
            <article class="input">
                <a href="#">
                <h2>Título de mi entrada</h2>
                    <p>Nulla sodales quis sapien vel efficitur. Pellentesque at leo justo. Sed
                        eros consequat sed. Maecenas ligula mi, consectetur ut semper vitae, rhoncus
                    </p>
                </a>
            </article>

            <div id="view-all">
                <a href="#">Ver todas las entradas</a>
            </div>

        </div>

        <div class="clearfix"></div>
    </div>

    <!-- Pie de página -->
    <footer id="footer">
        <p>Desarrollado por Jhil Palacios &copy; 2019</p>
    </footer>
</body>
</html>