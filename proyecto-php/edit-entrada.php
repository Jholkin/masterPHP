<?php require_once 'includes/redirect.php'; ?>
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

    <!--CAJA PRINCIPAL-->
    <div id="principle">
        <h1>Editar entrada</h1>
        <p>Edite su entrada <?= $entrada_actual['titulo'] ?></p>
        <br>
        <form action="save-entrada.php?editar=1" method="post">
            <label for="name">Nombre de la entrada</label>
            <input name="name" id="name" value="<?= $entrada_actual['titulo'] ?>">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'name') : ''; ?>

            <label for="description">Descripción de la entrada</label>
            <textarea name="description" id="description"><?= $entrada_actual['descripcion'] ?></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'description') : ''; ?>

            <label for="category">Categoria</label>
            <select name="category" id="category">
                <?php $categorias = getCategories($connect);
                if (!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <option value="<?= $categoria['id']?>" <?= ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected = "selected"' : '' ?>>
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

<?php require_once 'includes/footer.php'; ?>