<?php

class Coche
{
    // Atributos o propiedades
    // PUBLIC: se puede acceder desde cualquier lugar
    // PROTECTED: se puede acceder a ella desde la clase que la define, y desde clases que
    // hereden esta clase
    // PRIVATE: solo se pueden acceder desde esta clase
    public $color;
    protected $modelo;
    private $marca;
    public $velocidad;

    public function __construct($color, $modelo, $marca, $velocidad)
    {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->velocidad = $velocidad;
    }

    // Métodos (acciones que hace un objeto)
    public function getColor() {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function mostrarInformacion(Coche $miObjeto) {
        $informacion = "<h1>Información del coche</h1>";
        $informacion .="Color: ".$miObjeto->color."<br>";
        $informacion .="Velocidad: ".$miObjeto->velocidad."<br>";

        return $informacion;
    }
}