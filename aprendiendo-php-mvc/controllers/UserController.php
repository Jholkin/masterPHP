<?php

require_once 'BaseController.php';

class UserController
{
    public function list()
    {
        require_once 'models/user.php';

        $user = new User();

        $allUsers = $user->getAll('users');

        require_once 'views/user/list.php';
    }

    public function show()
    {
        require_once 'models/user.php';
        
        $user = new User('jhil',22);
        
        require_once 'views/user/show.php';
    }

    public function create()
    {
        require_once 'models/user.php';

        $user = new User();
        $user->setName('jhil');
        $user->setEmail('jhil@palacios.com');
        $user->setPassword('jhil');
        $user->save();

        header('Location: index.php?controller=User&action=list');
    }
}