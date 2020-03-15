<?php

class User extends BaseController
{
    private $name;
    private $email;
    private $password;

    public function __construct()
    {
        parent::__construct();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    public function setPassword(String $pass)
    {
        // Hasheando en password
        $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

        $this->password = $passwordHash;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getName() . " Edad: " . $this->getAge();
    }

    public function save()
    {
        $statement = $this->db->prepare("INSERT INTO users(name,email,password) VALUES ('{$this->getName()}', '{$this->getEmail()}', '{$this->getPassword()}');");
        $statement->execute();
        
        return $statement;
    }
}