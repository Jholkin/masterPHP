<?php
/*
 * Trait: nos permite definir una serie de métodos para compartirlos entre diferentes clases
 */

trait Utilidades {
    public function mostrarNombre() {
        echo "<h1>El nombre es: " . $this->getNombre() . "</h1>";
    }
}

class Persona
{
    private $nombre;
    private $apellidos;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    use Utilidades;
}

class Coche
{
    private $nombre;
    private $marca;
}

class VideoJuego
{
    private $nombre;
    private $anio;
}

$coche = new Coche();

$person = new Persona();
$person->setNombre('jhil palacios');
$person->mostrarNombre();

$juego = new VideoJuego();

