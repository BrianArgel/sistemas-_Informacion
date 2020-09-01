<?php


$user = "root";
$clave = "";
$host = "localhost";
$database = "juegos";

$conectar = mysqli_connect($host,$user,"") or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conectar, $database);


?>