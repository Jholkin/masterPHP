<?php

abstract class Ordenador
{
    private $encendido;

    abstract public function encender();

    public function apagar() {
        $this->encendido = false;
    }

    public function setEncendido($valor) {
        $this->encendido = $valor;
    }
}

class PcAsus extends Ordenador
{
    public $software;

    public function encender()
    {
        // TODO: Implement encender() method.
        $this->setEncendido('true');
    }

    public function arrancarSoftware() {
        $this->software = true;
    }
}

$ordenador = new PcAsus();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);