<?php

    $id = $_POST['usuario_id'];
    $nombre = $_POST['usuario_nombre'];
    $apellidos = $_POST['usuario_apellidos'];
    $email = $_POST['usuario_email'];

    include_once('conexion.php');

    $query = "INSERT INTO Usuarios VALUES ('$id','$nombre','$apellidos','$email')";

    if(mysqli_query($con, $query)){
        echo 'Usuario registrado';
    }else{
        echo 'No se pudo registrar al usuario';
    }

    mysqli_close($con);