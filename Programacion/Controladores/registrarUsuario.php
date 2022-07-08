<?php 
include ("../Controladores/conexionBaseDatos.php");

$usuario = $_POST['usuario'];
$nombreCompleto = $_POST['datosUsuario'];
$contrasena = $_POST['ContrasenaUsuario'];

$insertarUsuario = "INSERT INTO `usuario`(`username`, `complete_name`, `pasword`) VALUES ('$usuario', '$nombreCompleto', '$contrasena')";
$resultado = mysqli_query($conexion, $insertarUsuario);

if($resultado){
    echo "<script>alert('Se ingresaron los datos de forma correcta');window.location='../index.php';</script>";
}else{
    echo "<script>alert('Ups, los datos no se ingresaron');window.location='./add_Usuario.php';</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
