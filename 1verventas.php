<?php
session_start();
error_reporting(0);
$varsession = $_SESSION['usuario'];

if($varsession == null || $varsession = '') {
  echo 'USTED NO TIENE AUTORIZACIÓN';
  die();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventario</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
	<!-- Notifications area -->
	
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Danieltronic 
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption>
					<span>
						SUCURSAL MALACATAN<br>
						<small>Admin</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">

				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="1home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								HOME
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-case"></i>
							</div>
							<div class="navLateral-body-cr">
								NUEVO INGRESO
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="1ventas.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-balance"></i>
									</div>
									<div class="navLateral-body-cr">
										VENTA
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="1producto.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-truck"></i>
									</div>
									<div class="navLateral-body-cr">
										PRODUCTO
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="1proveedor.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-card"></i>
									</div>
									<div class="navLateral-body-cr">
										PROVEEDOR
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="1cliente.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-label"></i>
									</div>
									<div class="navLateral-body-cr">
										CLIENTE
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-face"></i>
							</div>
							<div class="navLateral-body-cr">
								VER
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="1verinventario.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account"></i>
									</div>
									<div class="navLateral-body-cr">
										INVENTARIO
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="1verventas.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts"></i>
									</div>
									<div class="navLateral-body-cr">
										VENTAS
									</div>
								</a>
							</li>
						</ul>
					</li>
					
						
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">

			<div class="full-width navBar-options">

				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	

				<div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
				
				<nav class="navBar-options-list">
					<ul class="list-unstyle">


						<li class="btn-exit" id="btn-exit" onclick="location.href='cerrar_sesion.php'">
							<i class="zmdi zmdi-power"></i>
							
							
						</li>
						<li class="text-condensedLight noLink" ><small>MALACATAN</small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- centro -->
<?php
include("1conexion.php");

$registros =("
	SELECT E.ID_ENCABEZADO AS 'ID VENTA', 
	E.COD_CLIENTE, 
	C.NOMBRE, 
	C.APELLIDO, 
	E.FECHA, 
	D.COD_PRODUCTO, 
	P.NOMBRE AS 'PRODUCTO', 
	P.PRECIOUNIT, 
	D.CANTIDAD,
	P.PRECIOUNIT * D.CANTIDAD AS 'TOTAL', 
	E.USUARIO 
	FROM encabezado_venta E, detalle_venta D, clientes C, producto P
	WHERE D.ID_ENCABEZADO = E.ID_ENCABEZADO AND
	E.COD_CLIENTE=C.COD_CLIENTE AND 
	D.COD_PRODUCTO = P.COD_PRODUCTO;");



	   	$sql=mysqli_query($conexion,$registros);
	   	$lista=mysqli_fetch_array($sql);
	   	 	

?>
<div class="mdl-grid">
								<div class="mdl-cell mdl-cell--12-col">
		                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION DE INVENTARIO</legend><br>
		                        </div>
		

							<center><table border="2.5px">
							<th> ID VENTA</th>
							<th>  COD_CLIENTE </th>
							<th>  NOMBRE</th>
							<th> APELLIDO </th>
							<th> FECHA </th>
							<th> COD_PRODUCTO </th>
							<th>  PRODUCTO </th>
							<th>  PRECIOUNIT</th>
							<th> CANTIDAD </th>
							<th> TOTAL </th>
							<th> USUARIO </th>

<?php
for($i=0;$i<$lista;$i++){
echo"<tr>";
echo"<td>";
	echo$lista['ID VENTA'];
echo "</td>";

echo "<td>";
	echo$lista['COD_CLIENTE'];
echo "</td>";

echo"<td>";
	echo$lista['NOMBRE'];
echo "</td>";	

echo"<td>";
	echo$lista['APELLIDO'];
echo "</td>";	
echo"<td>";
	echo$lista['FECHA'];
echo "</td>";	
echo"<td>";
	echo$lista['COD_PRODUCTO'];
echo "</td>";
echo"<td>";
	echo$lista['PRODUCTO'];
echo "</td>";	
echo"<td>";
	echo$lista['PRECIOUNIT'];
echo "</td>";	
echo"<td>";
	echo$lista['CANTIDAD'];
echo "</td>";	
echo"<td>";
	echo$lista['TOTAL'];
echo "</td>";
echo"<td>";
	echo$lista['USUARIO'];
echo "</td>";					

echo "</tr>";
$lista=mysqli_fetch_array($sql);

}
?>
</table></center>
									
								
	</section>
</body>
</html>