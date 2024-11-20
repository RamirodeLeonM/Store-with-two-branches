<?php
session_start();
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$conexion=mysqli_connect("localhost","root","","sucursalmalacatan");
$consulta=("SELECT * FROM login where NOMBRE='$usuario' and CONTRA='$contra'");
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
$_SESSION['usuario']=$usuario;

if($filas>0){
  
    header("location:1home.php");

}else{
  
    include("index.html");
    echo "<script>alert('Acceso denegado. Usuario y/o contraseña incorrectos.')</script>";

}
  
mysqli_free_result($resultado);
mysqli_close($conexion);
?>