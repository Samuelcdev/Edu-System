<?php 

require_once('./app/config/connection.php');

$controller = $_GET['controller'] ?? null;
$action = $_GET['action'] ?? null;

if (is_null($controller) && is_null($action)) {
    $controllerFile = "./app/controllers/user/siteController.php";
    require_once $controllerFile;
    landing();
    exit;
}

$controllerFile = "./app/controllers/{$controller}Controller.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    if (function_exists($action)) {
        $action();
    } else {
        die("Error: la acción no se encontró.");
    }
} else {
    die("Error: el controlador no se encontró.");
}
