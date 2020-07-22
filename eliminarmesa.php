<?php
    include 'encabezado.php';
    include 'conexion.php';

    $cid = $_GET["id"];  // obtiene el codigo de la base de datos enviado por medio del boton Editar a traves de get 
    // Luego realiza la consulta en la base de datos de ese registro cuyo id coincida
    $sql = "DELETE FROM mesa WHERE id_mesa ='$cid'";

    if($conexion->query($sql) === TRUE) {
        echo('
            <br> <br>
            <div class="container">
                <div class="card">
                <!-- Card image -->
                <div align="center">
                    <img src="img/ok.png" height="300" width="300" >
                </div>
                    <!-- Card content -->
                    <div class="card-body" align="center">
                        <p> Eliminacion Exitosa </p>
                        <a href="mesa.php" class="btn btn-primary">Aceptar</a>
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
                    <img src="img/error.png" height="300" width="300" >
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

    include 'pie.php'

?>