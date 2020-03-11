<?php
include_once 'includes/conection.php';

if ($_SESSION['login'] && $_GET['id']) {
    $entrada_id = $_GET['id'];
    $user_id = $_SESSION['login']['id'];
    $sql = "DELETE FROM entradas WHERE usuario_id = '$user_id' AND id = '$entrada_id';";

    mysqli_query($connect, $sql);
}

header('Location: index.php');