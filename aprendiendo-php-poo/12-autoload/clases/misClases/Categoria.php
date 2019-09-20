<?php

namespace misClases;

class Categoria
{
    private $nombre;
    private $descripcion;

    public function __construct()
    {
        $this->nombre = "videojuegos";
        $this->descripcion = "Categoria destinada a la seccion de videojuegos de accion";
    }
}