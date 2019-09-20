<?php

interface Ordenador
{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
}

class Imac implements Ordenador
{
    private $modelo;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {
        // TODO: Implement encender() method.
    }

    public function apagar()
    {
        // TODO: Implement apagar() method.
    }

    public function reiniciar()
    {
        // TODO: Implement reiniciar() method.
    }

    public function desfragmentar()
    {
        // TODO: Implement desfragmentar() method.
    }
}

$macintos = new Imac();
var_dump($macintos);