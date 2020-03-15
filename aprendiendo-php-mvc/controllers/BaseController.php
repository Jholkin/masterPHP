<?php

require_once 'config/database.php';

class BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = Database::getConnect();
    }

    public function getAll($table)
    {
        $statement = $this->db->prepare("SELECT * FROM $table ORDER BY id DESC");
        $statement->execute();

        return $statement;
    }
}