<?php
	$host="localhost";
	$db="sucursalmalacatan";
	$user="root";
	$pass="";

	$conexion=mysqli_connect($host, $user, $pass);

	if (mysqli_select_db($conexion, $db)) {
		echo "Conectado";
	}
?>