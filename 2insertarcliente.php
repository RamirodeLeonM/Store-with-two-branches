<?php 
	include("1conexion.php");

	$COD_CLIENTE=$_POST['COD_CLIENTE'];
	$NOMBRE=$_POST['NOMBRE'];
	$APELLIDO=$_POST['APELLIDO'];
	$DPI=$_POST['DPI'];
	$DIRECCION=$_POST['DIRECCION'];
	$NIT=$_POST['NIT'];


	$insert=("INSERT INTO clientes (COD_CLIENTE, NOMBRE, APELLIDO, DPI, DIRECCION, NIT) VALUES('$COD_CLIENTE','$NOMBRE','$APELLIDO', '$DPI','$DIRECCION','$NIT')");
	$sql=mysqli_query($conexion, $insert);
	mysqli_close($conexion);

	include("1cliente.php");
	echo "<script>alert('¡Guardado con exito!')</script>";
 ?>

