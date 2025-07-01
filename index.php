<?php

include 'config/databases.php';
include 'models/Usuarios.php';
include 'controllers/UsuarioController.php';

$controller = new UsuarioController();
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
}else{
    echo "Acción no válida";
}


?>