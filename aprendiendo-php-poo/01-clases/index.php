<?php

// Definiendo una clase
class Coche
{
    // Atributos o propiedades
    public $color = "rojo";
    public $modelo = "Aventador";
    public $marca = "Ferrari";
    public $velocidad = 2;

    // Métodos (acciones que hace un objeto)
    public function getColor() {
        return $this->color;
    }

    /**
     * @param string $color
     */
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
}

// Creando un objeto (instancia de una clase)
$coche = new Coche();

//var_dump($coche);

// Usando los métodos
echo $coche->getVelocidad();