<?php

require_once 'autoload.php';

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'].'Controller';
}else {
    echo "La página que buscas no existe";
    exit();
}

if (class_exists($controller)) {
    $modelController = $_GET['controller'].'Controller';
    $controller = new $modelController();

    if (isset($_GET['action']) && method_exists($controller,$_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    }else {
        echo 'La página que buscas no existe';
    }
}else {
    echo 'La página que buscas no existe';
}