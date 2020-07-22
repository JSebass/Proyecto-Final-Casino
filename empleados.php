<?php
    session_start();
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3 style="color:white;"> Listado de Empleados</h3>
        
    ');

    $sql = "SELECT * FROM empleado ";
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
                        <th scope="col">estado</th>
                        <th scope="col">mesa</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $placa = $row['id_empleado'];
            $marca = $row['nombre_empleado'];
            $correo = $row['correo_emp'];
            $contra = $row['contraseña_emp'];
            $estado = $row['estado_emp'];
            $mesa = $row['mesa'];
              

            
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        
                        <td>'.$placa.'</td>
                        <td>'.$marca.'</td>
                        <td>'.$correo.'</td>
                        <td>'.$contra.'</td>
                        <td>'.$estado.'</td>
                        <td>'.$mesa.'</td>
                       
                        <td> 
                        
                        <a href= "eliminaremple.php?id='.$placa.' "  class="btn btn btn-danger"> Eliminar </a>  
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