<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<!--CAJA PRINCIPAL-->
<div id="principle">
    <h1>Crear categorias</h1>

    <p>Añade nuevas categorías para que los usuarios puedan verla y sentirse más atraídos a su blog.</p>
    <br>
    <form action="save-category.php" method="post">
        <label for="name">Nombre de la categoria</label>
        <input name="name" id="name">

        <input type="submit" value="Guardar">
    </form>
</div>

<?= require_once 'includes/footer.php'; ?>