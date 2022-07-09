<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<?php
        session_start();
        include ("Controladores/conexionBaseDatos.php");
        $consulta = "SELECT * FROM publicacion";
        $resultado=mysqli_query($conexion, $consulta);
        while($publicaciones = mysqli_fetch_array($resultado)){
            ?>
                    <h2> <?php echo $publicaciones["autor"]; ?> </h2>
                    <p> <?php echo $publicaciones["texto"]; ?> </p>
                    <hr/>
<?php
if (!isset($_SESSION['username'])) {
    echo 'debes estar registrado';
}else{
    ?> <a href="Controladores/cerrarSession.php">cerrar sesion</a> <?php
}

        }
    
?>

</body>
</html>
