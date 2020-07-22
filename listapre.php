<?php
    session_start();
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3 style="color:white"> Listado de premios</h3>
        
    ');

    $sql = "SELECT * FROM premio JOIN juego on juego = id_juego";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table style="color:white" class="table">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Fecha premio</th>
                        <th scope="col">Juego</th>
                        <th scope="col">opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $id = $row['id_premio'];
            $valor = $row['valor_premio'];
            $fecha = $row['fecha_premio'];
            $nombre = $row['nombre_juego'];
            
              

            
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        
                        <td>'.$id.'</td>
                        <td>'.$valor.'</td>
                        <td>'.$fecha.'</td>
                        <td>'.$nombre.'</td>
                        
                       
                        <td> 
                        
                        <a href= "eliminarpre.php?id='.$id.' "  class="btn btn btn-danger"> Eliminar </a>  
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