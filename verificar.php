<?php

$email=$_POST['email'];
$password=$_POST['password'];

//conectar con base de datos
$conexion=mysqli_connect("Localhost", "root", "", "registrou");
$consulta="SELECT * FROM usuarios WHERE email='$email' and password='$password'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
	header("Location:index.php");
}else {
	echo "ERROR EN LA AUTENTICACION";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>