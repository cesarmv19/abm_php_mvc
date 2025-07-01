<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuario</h1>
    <a href="index.php?action=crear">Nuevo Usuario</a>
    <ul>
    <?php foreach ($usuarios as $usuario):?>
        <li>
            <?php
            echo $usuario['nombre'] . " - " . $usuario['email'];
            ?>
            <a href="index.php?action=editar&id=<?php echo $usuario['id']; ?>">Editar</a>
            <a href="index.php?action=eliminar&id=<?php echo $usuario['id']; ?>">Eliminar</a>
        </li>
        <?php endforeach; ?>
    

    </ul>
</body>
</html>