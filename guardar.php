<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


$insertar = "INSERT INTO usuarios VALUES('$nombre','$email','$password')";


$query = mysqli_query($conectar, $insertar);

if($query){
	echo "Cuenta creada satisfactoriamente ";
	echo "<br>";
	echo "Inicie sesion para proceder";

}else{
	echo "Incorrecto";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="css/inicio.css" >
</head>
<body>

	<form action="login.php" method="post" name="form">
	
	<input type="submit" value="Login">

</form>

</body>
</html>