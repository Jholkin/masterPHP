<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/sidebar.php'; ?>

    <!-- Contenido principal -->
    <div id="principle">
        <h1>Todas las entradas</h1>

        <?php
        $entradas = getEntradas($connect);
        if (!empty($entradas)):
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
        endif;
        ?>

    </div>

<?php require_once 'includes/footer.php'; ?>