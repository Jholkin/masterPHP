<h1>Listado de usuarios</h1>

<?php while($user = $allUsers->fetch(PDO::FETCH_OBJ)): ?>
    <p>
        <?= $user->name ?> - <?= $user->email ?>
    </p>
<?php endwhile; ?>