<?php
include ("../Controladores/conexionBaseDatos.php");

$usuario = $_POST['Usuario'];
$contrasena = $_POST['contrasena'];



$consulta="SELECT * FROM usuario WHERE username='$usuario' and pasword='$contrasena' ";
$resultado=mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
$nom = mysqli_fetch_assoc( $resultado );


if($filas>0){
    session_start();
    $_SESSION['username']=$nombreUsuario;
    $_SESSION['complete_name']=$nombreCompleto;

    echo "<script>alert('El usuario ESTA registrado');window.location='../index.php';</script>"; 

}else{
 
    echo "<script>alert('El usuario NO ESTA registrado');</script>";

}

