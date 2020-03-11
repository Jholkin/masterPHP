<!-- Sidebar o Barra lateral -->
<aside id="sidebar">

    <div id="search" class="block-aside">
        <h3>Buscar</h3>

        <?php if(isset($_SESSION['login_failed'])): ?>
            <div class="alert alert-error">
                <?php $_SESSION['login_failed'] ?>
            </div>
        <?php endif; ?>

        <form action="buscar.php" method="post">
            <input type="text" name="busqueda">

            <input type="submit" value="buscar">
        </form>
    </div>

    <?php if(isset($_SESSION['login'])): ?>
        <div id="user-logueado" class="block-aside">
            <h3>Bienvenido, <?= $_SESSION['login']['nombre'] . " " . $_SESSION['login']['apellidos'] ?></h3>
            <a href="crear-entrada.php" class="button button-orange">Crear entrada</a>
            <a href="crear-categoria.php" class="button">Crear categoria</a>
            <a href="mis-datos.php" class="button button-green">Perfil</a>
            <a href="logout.php" class="button button-red">Cerrar Sesion</a>
        </div>
    <?php endif; ?>

    <?php if(!isset($_SESSION['login'])): ?>
        <div id="login" class="block-aside">
            <h3>Inicio de sesión</h3>

            <?php if(isset($_SESSION['login_failed'])): ?>
                <div class="alert alert-error">
                    <?php $_SESSION['login_failed'] ?>
                </div>
            <?php endif; ?>

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

            <!--Mostrar errores-->
            <?php if (isset($_SESSION['complete'])): ?>
                <div class="alert alert-exit">
                    <?= $_SESSION['complete'];?>
                </div>
            <?php elseif(isset($_SESSION['errors']['generic'])): ?>
                <div class="alert alert-error">
                    <?= $_SESSION['errors']['generic'];?>
                </div>
            <?php endif; ?>
            <form action="register.php" method="post">
                <label for="name">Nombre</label>
                <input type="text" name="name">
                <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'name') : ''; ?>

                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname">
                <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'lastname') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email">
                <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'email') : ''; ?>

                <label for="password">Password</label>
                <input type="password" name="password">
                <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'password') : ''; ?>

                <input type="submit" name="submit" value="registrar">
            </form>
            <?php borrarError(); ?>
        </div>
    <? endif; ?>
</aside>
