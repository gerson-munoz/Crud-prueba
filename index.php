<html>
    <head>
        <title>Pagina</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>    
    <body>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">EMAIL</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                
                    <?php 
                        include_once('conexion.php');

                        $query = "SELECT * FROM Usuarios";
                        $sql =  mysqli_query($con, $query);
                        
                        if(!$sql){
                            echo 'Hubo un error';
                        }else{
                            while($row = mysqli_fetch_array($sql)){
                                echo '
                                <tr>
                                    <th scope="row">'.$row['id'].'</th>
                                    <td>'.$row['nombre'].'</td>
                                    <td>'.$row['apellidos'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td><a class="btn btn-primary" href="FormularioActualizar.php?id='.$row['id'].'" role="button">Actualizar Usuario</a></td>
                                    <td><a class="btn btn-primary" href="Eliminar.php?id='.$row['id'].'" role="button">Eliminar Usuario</a></td>
                                </tr>
                                ';
                            }
                        }
                    ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="Formulario.php" role="button">REGISTRAR USUARIOS</a>
    </body>
</html>
    


    