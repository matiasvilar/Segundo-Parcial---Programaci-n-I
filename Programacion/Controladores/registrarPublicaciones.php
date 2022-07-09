<?php 
include ("../Controladores/conexionBaseDatos.php");
session_start();

$usuario = $_POST['publicacion'];
$nombreCompleto = $_POST['datosUsuario'];
$contrasena = $_POST['ContrasenaUsuario'];

$insertarUsuario = "INSERT INTO `usuario`(`username`, `complete_name`, `pasword`) VALUES ('$usuario', '$nombreCompleto', '$contrasena')";
$resultado = mysqli_query($conexion, $insertarUsuario);

if($resultado){
    echo "<script>alert('Se ingreso la publicacion de forma correcta');window.location='../index.php';</script>";
}else{
    echo "<script>alert('Ups, no se pudo publicar');window.location='../index.php';</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
