<?php

class Persona
{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $prefix_method = substr($name, 0, 3);

        if ($prefix_method == 'get') {
            $nombre_method = substr(strtolower($name), 3);

            if (isset($this->nombre_method)) {
                return "el método que estás invocando no existe";
            }

            return $this->nombre_method;
        } else {
            return "El método que estás invocando no existe";
        }
    }
}

$persona = new Persona('jhil','21','tingo maria');
$persona->getNombre();
var_dump($persona);