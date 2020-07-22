<?php
    session_start();
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3 style="color:white;"> Listado de clientes</h3>
        
    ');

    $sql = "SELECT * FROM cliente JOIN juego on juego = id_juego";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table" style="color:white;">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">correo</th>
                        <th scope="col">contraseña</th>
                        <th scope="col">fecha naci</th>
                       
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $placa = $row['id_cliente'];
            $marca = $row['nombre_cli'];
            $correo = $row['correo_cli'];
            $contra = $row['contraseña_cli'];
            $fecha = $row['fecha_nac'];
           
              

            
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        
                        <td>'.$placa.'</td>
                        <td>'.$marca.'</td>
                        <td>'.$correo.'</td>
                        <td>'.$contra.'</td>
                        <td>'.$fecha.'</td>
                                               
                        <td> 
                        
                        <a href= "eliminarcli.php?id='.$placa.' "  class="btn btn btn-danger"> Eliminar </a>  
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