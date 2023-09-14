<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <form action="Registrar.php" method="POST">
    <div class="form-group">
        <label for="usuario_id">ID</label>
        <input type="text" class="form-control" id="usuario_id" name="usuario_id" placeholder="ID" required>
    </div>
    <div class="form-group">
        <label for="usuario_nombre">NOMBRE</label>
        <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group">
        <label for="usuario_apellido">APELLIDOS</label>
        <input type="text" class="form-control" id="usuario_apellido" name="usuario_apellidos" placeholder="Apellidos" required>
    <div class="form-group">
        <label for="usuario_email">EMAIL</label>
        <input type="email" class="form-control" id="usuario_email" name="usuario_email" placeholder="Email" required>
    </div><br><br>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</body>
</html>

