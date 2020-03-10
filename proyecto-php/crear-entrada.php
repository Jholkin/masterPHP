<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<!--CAJA PRINCIPAL-->
<div id="principle">
    <h1>Crear entradas</h1>
    <p>Añade nuevas entradas para que los usuarios puedan verla y sentirse más atraídos a su blog.</p>
    <br>
    <form action="save-entrada.php" method="post">
        <label for="name">Nombre de la entrada</label>
        <input name="name" id="name">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'name') : ''; ?>

        <label for="description">Descripción de la entrada</label>
        <textarea name="description" id="description"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'description') : ''; ?>

        <label for="category">Categoria</label>
        <select name="category" id="category">
            <?php $categorias = getCategories($connect);
                if (!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?= $categoria['id']?>">
                    <?= $categoria['nombre'] ?>
                </option>
            <?endwhile;
            endif;?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'category') : ''; ?>

        <input type="submit" value="Guardar">
    </form>
    <?php borrarError(); ?>
</div>

<?= require_once 'includes/footer.php' ?>