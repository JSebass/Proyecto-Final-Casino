<?php
    require 'conexion.php';
    session_start();

    $id_usuario = $_POST['idusuario'];
    $contraseña = $_POST['passusuario'];

    $sql = "SELECT COUNT(*) as contar from cliente where id_cliente = '$id_usuario' and contraseña_cli='$contraseña' ";
    $nom = "SELECT nombre_cli from cliente where id_cliente = '$id_usuario' "; 
    $consulta = mysqli_query($conexion,$sql);
    $consulta2 = mysqli_query($conexion,$nom);
    $array = mysqli_fetch_array($consulta);
    $array2 = mysqli_fetch_array($consulta2);


    if($array['contar']>0){
        $_SESSION['nombre_cli']=$array2['nombre_cli'];
        header("location: index.php");
   }else{
    echo('
    <br> <br>
    <div class="container">
        <div class="card" >
        <!-- Card image -->
            <div align="center">
                <img src="imagenes/error.png" height="300" width="300" >
            </div>
            <!-- Card content -->
            <div class="card-body" align="center">
                <h4 class="card-title"><a>"Error: "'. $sql .'"<br>"'. $conexion->error .'</a></h4>
                <a href="ingresar.php" class="btn btn-primary">Aceptar</a>
            </div>
        </div>
    </div>
    ');
   }

?>
