<?php
//conectar a la base de datos
$conexion = mysqli_connect('localhost','root','root','php_mysql');

//comprabar si la conexión es correcta
if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MYSQL ha fallado".mysqli_connect_error();
} else {
    echo "conexion realizada correctamente<br>";
}

//consulta para configurar la codificación de caracteres
mysqli_query($conexion,"SET NAMES 'utf8'");

//consulta select desde php
$resultado = mysqli_query($conexion, "SELECT * FROM nota");

// $notas = mysqli_fetch_assoc($resultado);

// var_dump($notas);

//recorrer todos los valores recogidos de la base de datos
while ($nota = mysqli_fetch_assoc($resultado)) {
    echo "<h2>".$nota['titulo']."</h2>";
    echo $nota['descripcion']."<br>";
    echo $nota['color']."<br>";
}

//insertar datos en la bd desde php
$sql = "INSERT INTO nota VALUES(null,'nota desde php','esto es una nota insertada desde php','verde')";
$query = mysqli_query($conexion,$sql);

if ($query) {
    echo "la inserccion de datos se realizo correctamente";
} else {
    echo "error".mysqli_error($conexion);
}

