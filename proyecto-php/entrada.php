<?php require_once 'includes/conection.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
$entrada_actual = getEntrada($connect,$_GET['id']);
if (!isset($entrada_actual['id'])) {
    header('Location: index.php');
}
?>

<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

    <!-- Contenido principal -->
    <div id="principle">
        <h1><?= $entrada_actual['titulo']; ?></h1>
        <h2><?= $entrada_actual['categoria'] ?></h2>
        <h4><?= $entrada_actual['fecha'] ?></h4>
        <p>
            <?= $entrada_actual['descripcion'] ?>
        </p>

        <?php if (isset($_SESSION['login']) && $_SESSION['login']['id'] == $entrada_actual['usuario_id']): ?>
            <a href="edit-entrada.php?id=<?= $entrada_actual['id'] ?>" class="button button-orange">Editar entrada</a>
            <a href="delete-entrada.php?id=<?= $entrada_actual['id'] ?>" class="button">Eliminar entrada</a>
        <?php endif; ?>
    </div>

<?php require_once 'includes/footer.php'; ?>