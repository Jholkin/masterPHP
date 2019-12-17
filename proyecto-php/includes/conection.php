<?php
//connection with database
$server = "localhost";
$user = "dba";
$password = "admin";
$database = "blog";

$connect = mysqli_connect($server,$user,$password,$database);

mysqli_query($connect,"SET NAMES 'utf-8'");