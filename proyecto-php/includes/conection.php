<?php
//connection with database
$server = "localhost";
$user   = "root";
$password   =   "root";
$database   =   "blog_in_php";

$connect = mysqli_connect($server,$user,$password,$database);

mysqli_query($connect,"SET NAMES 'utf-8'");