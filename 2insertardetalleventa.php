<?php 
	include("1conexion.php");

	$ID_ENCABEZADO=$_POST['ID_ENCABEZADO'];
	$COD_PRODUCTO=$_POST['COD_PRODUCTO'];
	$CANTIDAD=$_POST['CANTIDAD'];


	$insert=("INSERT INTO detalle_venta (ID_ENCABEZADO, COD_PRODUCTO, CANTIDAD ) VALUES('$ID_ENCABEZADO','$COD_PRODUCTO','$CANTIDAD')");
	$sql=mysqli_query($conexion, $insert);
	mysqli_close($conexion);

	include("1ventas.php");
	echo "<script>alert('¡Guardado con exito!')</script>";
 ?>