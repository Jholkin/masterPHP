<?php
require_once 'Coche.php';

$coche = new Coche("Azul","Diablo","Lamborgini","300");

//var_dump($coche);

echo $coche->mostrarInformacion($coche);