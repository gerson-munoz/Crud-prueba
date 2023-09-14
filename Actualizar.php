<?php

    $id = $_POST['usuario_id'];
    $nombre = $_POST['usuario_nombre'];
    $apellidos = $_POST['usuario_apellidos'];
    $email = $_POST['usuario_email'];

    include_once('conexion.php');

    $query = "UPDATE Usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '$email' WHERE id = '$id'";

    if($con->query($query)){
        echo 'Usuario Actualizado';
    }else{
        echo 'No se pudo Actualizar al usuario';
    }

    mysqli_close($con);