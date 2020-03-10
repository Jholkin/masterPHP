<?php
//connection with database
$server = "localhost";
$user = "root";
$password = "";
$database = "blog";

$connect = mysqli_connect($server,$user,$password,$database);

mysqli_query($connect,"SET NAMES 'utf8'");

// Iniciamos la sesión
if (!isset($_SESSION)) {
    session_start();
}