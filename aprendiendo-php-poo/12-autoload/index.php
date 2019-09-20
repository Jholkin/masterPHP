<?php

require_once 'autoload.php';

//$user = new Usuario();
//var_dump($user);

// ESPACIOS DE NOMBRES Y PAQUETES

use misClases\Usuario;
use misClases\Categoria;
use misClases\Entrada;

class Principal
{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
}

$principal =  new Principal();
var_dump($principal->usuario);

// COMPROBAR SI EXISTE O NO UNA CLASE

$clase = class_exists('misClases\Usuario');

if ($clase) {
    echo "<h1>La clase si existe</h1>";
} else {
    echo "<h1>La clase no existe</h1>";
}