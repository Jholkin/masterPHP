<?php

class Usuario
{
    private $nombre;
    private $email;

    public function __construct()
    {
        $this->nombre = 'jhil';
        $this->email = 'jhil@jhil.jhil';
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Hola, {$this->nombre} , estás registrado con {$this->email}";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Destruyendo el objeto...";
    }
}

$user = new Usuario();
echo $user;
// var_dump($user);