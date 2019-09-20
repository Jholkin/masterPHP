<?php
// Herencia: posibiladad de compartir atributos y métodos entre clases

class Persona
{
    public $name;
    public $lastname;
    public $age;

    public function __construct()
    {
        $this->name = "";
        $this->lastname = "";
        $this->age = 0;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function hablar() {
        return "Estoy hablando";
    }

    public function caminar() {
        return "Estoy caminando";
    }
}

class Informatico extends Persona
{
    public $lenguajes;

    public function __construct()
    {
        $this->lenguajes = "PHP, JS";
    }

    public function sabeLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
        return $lenguajes;
    }

    public function programar() {
        return "Soy un programador";
    }

    public function repararOrdenador() {
        return "Reparo ordenador";
    }
}