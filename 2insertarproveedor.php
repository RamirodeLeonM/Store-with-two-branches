<?php 
	include("1conexion.php");

	$COD_PROVEEDOR=$_POST['COD_PROVEEDOR'];
	$NOMBRE=$_POST['NOMBRE'];
	$APELLIDO=$_POST['APELLIDO'];
	$DPI=$_POST['DPI'];
	$DIRECCION=$_POST['DIRECCION'];
	$EMPRESA=$_POST['EMPRESA'];
	$TELEFONO=$_POST['TELEFONO'];


	$insert=("INSERT INTO proveedor (COD_PROVEEDOR, NOMBRE, APELLIDO, DPI, DIRECCION, EMPRESA, TELEFONO) VALUES('$COD_PROVEEDOR','$NOMBRE','$APELLIDO', '$DPI','$DIRECCION','$EMPRESA', '$TELEFONO')");
	$sql=mysqli_query($conexion, $insert);
	mysqli_close($conexion);

	include("1proveedor.php");
	echo "<script>alert('¡Guardado con exito!')</script>";
 ?>
