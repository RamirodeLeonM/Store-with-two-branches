<?php 
	include("1conexion.php");

	$COD_PRODUCTO=$_POST['COD_PRODUCTO'];
	$NOMBRE=$_POST['NOMBRE'];
	$DESCRIPCION=$_POST['DESCRIPCION'];
	$MARCA=$_POST['MARCA'];
	$CATEGORIA=$_POST['CATEGORIA'];
	$PRECIOCOSTO=$_POST['PRECIOCOSTO'];
	$PRECIOUNIT=$_POST['PRECIOUNIT'];
	$CANTIDAD=$_POST['CANTIDAD'];
	$COD_PROVEEDOR=$_POST['COD_PROVEEDOR'];


	$insert=("INSERT INTO producto (COD_PRODUCTO, NOMBRE, DESCRIPCION, MARCA, CATEGORIA, PRECIOCOSTO, PRECIOUNIT, CANTIDAD, COD_PROVEEDOR) VALUES('$COD_PRODUCTO','$NOMBRE','$DESCRIPCION', '$MARCA','$CATEGORIA','$PRECIOCOSTO', '$PRECIOUNIT', '$CANTIDAD','$COD_PROVEEDOR')");
	$sql=mysqli_query($conexion, $insert);
	mysqli_close($conexion);

	include("1producto.php");
	echo "<script>alert('¡Guardado con exito!')</script>";
 ?>