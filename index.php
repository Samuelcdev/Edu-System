<?php
require_once './app/config/connection.php';

$controller = $_GET['controller'] ?? null;
$action = $_GET['action'] ?? null;
$baseDir = "./app/controllers";
$controllerFile = findControllerFile($baseDir, $controller);

//Condicional para que muestre la landing page si no se recibe controlador y accion
if (is_null($controller) && is_null($action)) {
    $controllerFile = './app/controllers/user/siteController.php';
    require_once $controllerFile;
    showLanding();
    exit;
}

//Funcion para buscar en todas las subcarpetas de controllers
function findControllerFile($baseDir, $controller)
{
    $dirIterator = new RecursiveDirectoryIterator($baseDir);
    $iterator = new RecursiveIteratorIterator($dirIterator);

    foreach ($iterator as $file) {
        if ($file->getFilename() === "{$controller}Controller.php") {
            return $file->getPathname();
        }
    }

    return null;
}

//Condicional para manejar los errores si no encuentra la accion o el controlador
if ($controllerFile) {
    require_once $controllerFile;

    if (function_exists($action)) {
        $action();
    } else {
        die("Error: la accion '{$action}' no se encontro en el controlador");
    }
} else {
    die("Error: el controlador '{$controller} no se encontro'");
}
