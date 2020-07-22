<?php
session_start();
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3 style="color:white;"> Listado de Mesas</h3>
        
    ');

    $sql = "SELECT * FROM mesa JOIN juego on juego_m = id_juego";
    //$i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table" style="color:white;">
                <thead class="blue white-text">
                    <tr>
                        
                        <th scope="col">mesa</th>
                        <th scope="col">Juego</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
             $id = $row['id_mesa'];
            $juego = $row['nombre_juego'];
            
              

            
            echo('
                <tbody>
                    <tr>
                                                
                        <td>'.$id.'</td>
                        <td>'.$juego.'</td>
                      
                       
                        <td> 
                        
                        <a href= "eliminarmesa.php?id='.$id.' "  class="btn btn btn-danger"> Eliminar </a>  
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