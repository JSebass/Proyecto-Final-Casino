<?php
    session_start();
    include 'encabezado.php';

    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3 style="color:white"> Listado de Juegos </h3>
        
    ');

    $sql = "SELECT * FROM juego";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table style="color:white;" class="table">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $placa = $row['id_juego'];
            $marca = $row['nombre_juego'];
              

            
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        
                        <td>'.$marca.'</td>
                       
                        
                    </tr>
            ');                        
        }
        echo('
                </tbody>
            </table>
        </div>
        ');   
    }
    
    include 'pie.php'
    
?>