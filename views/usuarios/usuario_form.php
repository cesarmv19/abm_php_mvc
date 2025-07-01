<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo isset($usuario) ? "Editar Usuario" : "Crear Usuario"; ?></h1>
    <form action="index.php?action=guardar" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id'] ?? ''?>">
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $usuario['nombre'] ?? ''?>">
        <input type="email" name="email" placeholder="Email" value="<?php echo $usuario['email'] ?? ''?>">
        <button>Guardar</button>
    </form>
</body>
</html>