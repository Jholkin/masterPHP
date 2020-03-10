<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="principle">
    <h1>Mis datos</h1>

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
    <form action="update-user.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" value="<?= $_SESSION['login']['nombre']; ?>">
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'name') : ''; ?>

        <label for="lastname">Apellidos</label>
        <input type="text" name="lastname" value="<?= $_SESSION['login']['apellidos']; ?>">
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'lastname') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $_SESSION['login']['email']; ?>">
        <?php echo isset($_SESSION['errors']) ? mostrarError($_SESSION['errors'], 'email') : ''; ?>

        <input type="submit" name="submit" value="actualizar">
    </form>
    <?php borrarError(); ?>
</div>

<?= require_once 'includes/footer.php'; ?>
