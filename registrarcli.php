<?php
    // Registra un cliente en la base de datos
    include 'encabezado.php';
    include 'conexion.php';

    $id_cli = $_POST["idcli"];
    $nombre = $_POST["nomcli"];
    $apellido = $_POST["apecli"];
    $correo = $_POST["correocli"];
    $contraseña = $_POST["passcli"];
    $fechaNac = $_POST["fechacli"];
    $saldo = 0;
    $juego = 1;
    $estado=TRUE;
    $sql="INSERT INTO cliente (id_cliente, nombre_cli, apellido_cli, correo_cli, contraseña_cli,fecha_nac, saldo, juego,estado_cli)
          values('$id_cli','$nombre','$apellido','$correo','$contraseña','$fechaNac','$saldo','$juego','$estado')";
    
    if($conexion->query($sql) === TRUE) {
        echo('
            <br> <br>
            <div class="container">
                <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="imagenes/exitoso.png">
                    <!-- Card content -->
                    <div class="card-body" align="center">
                        <a href="index.php" class="btn btn-primary">Aceptar</a>
                    </div>
                </div>
            </div>
        ');
    }    
    else {
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
                    <a href="index.php" class="btn btn-primary">Aceptar</a>
                </div>
            </div>
        </div>
        ');
    }
    

?>