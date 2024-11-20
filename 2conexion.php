<?php
	$host="localhost";
	$db="sucursalcoatepeque";
	$user="root";
	$pass="";

	$conexionc=mysqli_connect($host, $user, $pass);

	if (mysqli_select_db($conexionc, $db)) {
		echo "Conectado COATEPQUE";
	}
?>