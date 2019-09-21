
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
