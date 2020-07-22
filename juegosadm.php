<?php
    require 'conexion.php';
    session_start();
    include 'encabezado.php';
   

    echo('
        <div align="center" class="container"> 
        <br>
            <h3 style="color:white;"> Listado de Juegos </h3>
        
    ');

    $sql1 = "SELECT * FROM juego";
    $i = 0;

    if ($resultado = $conexion->query($sql1)) {
        echo('
            <table class="table" style="color:white;">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Opciones</th>
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
                       
                        <td> 
                        
                        <a href= "eliminarju.php?id='.$placa.' "  class="btn btn btn-danger"> Eliminar </a>  
                        </td>
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