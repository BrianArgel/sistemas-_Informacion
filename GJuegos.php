<?php
require 'CJuegos.php';

$juego = $_POST['juego'];
$plataforma = $_POST['plataforma'];
$pago = $_POST['pago'];


$insertar = "INSERT INTO games VALUES('$juego','$plataforma','$pago')";


$query = mysqli_query($conectar, $insertar);

if($query){
	echo "Pedido hecho con satisfaccion";
	echo "<br>";
	echo "Pedido llegara en 6 dias aprox";

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

	<form action="index.php" method="post" name="form">
	
	<input type="submit" value="INICIO">

</form>

</body>
</html>