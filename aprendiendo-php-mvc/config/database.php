<?php

class Database
{
    private static $dbh;

    private function __construct(){}

    public static function getConnect()
    {
        if (!self::$dbh instanceof self) {
            try {
                self::$dbh = new PDO('mysql:host=localhost;dbname=php_mvc','root','toor');
                self::$dbh->query('SET NAMES utf8');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        return self::$dbh;
    }
}

