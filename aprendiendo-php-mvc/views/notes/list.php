<h1>Listado de notas</h1>

<?php while($note = $allNotes->fetch(PDO::FETCH_OBJ)): ?>
    <p>
        <?= $note->name ?> - <?= $note->description ?>
    </p>
<?php endwhile; ?>