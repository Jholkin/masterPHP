<?php require_once 'includes/conection.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
    $categoria_actual = getCategory($connect,$_GET['id']);
    if (!isset($categoria_actual['id'])) {
        header('Location: index.php');
    }
?>

<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

    <!-- Contenido principal -->
    <div id="principle">
        <h1>Entradas de <?= $categoria_actual['nombre']; ?></h1>

        <?php
            $entradas = getEntradas($connect,null, $_GET['id']);
            if (!empty($entradas) && mysqli_num_rows($entradas) >= 1):
                while ($entrada = mysqli_fetch_assoc($entradas)):
        ?>
                    <article class="input">
                        <a href="entrada.php?id=<?= $entrada['id'] ?>">
                            <h2><?= $entrada['titulo'] ?></h2>
                            <span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>
                            <p> <?= substr($entrada['descripcion'], 0, 150) . "..." ?> </p>
                        </a>
                    </article>
        <?php
                endwhile;
            else:
        ?>
                <div class="alert">No hay entradas en esta categoria</div>
        <?php endif; ?>

    </div>

<?php require_once 'includes/footer.php'; ?>