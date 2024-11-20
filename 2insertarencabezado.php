<?php 
	include("1conexion.php");

	$ID_ENCABEZADO=$_POST['ID_ENCABEZADO'];
	$COD_CLIENTE=$_POST['COD_CLIENTE'];
	$FECHA=$_POST['FECHA'];
	$USUARIO=$_POST['USUARIO'];


	$insert=("INSERT INTO encabezado_venta (ID_ENCABEZADO, COD_CLIENTE, FECHA, USUARIO ) VALUES('$ID_ENCABEZADO','$COD_CLIENTE','$FECHA', '$USUARIO')");
	$sql=mysqli_query($conexion, $insert);
	mysqli_close($conexion);

	include("1ventas.php");
	echo "<script>alert('¡Guardado con exito!')</script>";
 ?>