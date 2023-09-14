<?php

    $id = $_GET['id'];

    include_once('conexion.php');

    $query = "DELETE FROM Usuarios WHERE id = '$id'";

    if($con->query($query)){
        echo 'Usuario Eliminado';
    }else{
        echo 'No se pudo Eliminar al usuario';
    }

    mysqli_close($con);