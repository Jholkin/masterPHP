<?php

class Note extends BaseController
{
    private $name;
    private $content;

    public function getName()
    {
        return $this->name;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function setContent(String $content)
    {
        $this->content = $content;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getName() . "<br>Contenido: " . $this->getContent();
    }
}