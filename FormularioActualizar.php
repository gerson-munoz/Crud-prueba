<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <form action="Actualizar.php" method="POST">
        <?php 
            include_once('conexion.php');

            $u = $_GET['id'];
            $query = "SELECT * FROM Usuarios WHERE id = $u";
            $sql = mysqli_query($con, $query);
            $usuario = mysqli_fetch_array($sql);        
        ?>
    <div class="form-group">
        <input type="text" class="form-control" id="usuario_id" name="usuario_id" placeholder="ID" value="<?php echo $u ?>" hidden>
    </div>
    <div class="form-group">
        <label for="usuario_nombre">NOMBRE</label>
        <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" placeholder="Nombre"  value="<?php echo $usuario['nombre'] ?>" required>
    </div>
    <div class="form-group">
        <label for="usuario_apellido">APELLIDOS</label>
        <input type="text" class="form-control" id="usuario_apellido" name="usuario_apellidos" placeholder="Apellidos" value="<?php echo $usuario['apellidos'] ?>" required>
    <div class="form-group">
        <label for="usuario_email">EMAIL</label>
        <input type="email" class="form-control" id="usuario_email" name="usuario_email" placeholder="Email" value="<?php echo $usuario['email'] ?>" required>
    </div><br><br>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</body>
</html>