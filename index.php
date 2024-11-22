<?php
require_once './app/config/connection.php';

$controller = $_GET['controller'] ?? 'site';
$action = $_GET['action'] ?? 'showLanding';
$baseDir = "./app/controllers";
$controllerFile = findControllerFile($baseDir, $controller);

if(is_null($controller)){
    echo "Controlador no encontrado";
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

//Manejo de errores para la accion y el controlador
try{
    require_once $controllerFile;
    if(function_exists($action)){
        $action();
    } else {
        throw new Exception("Error: la accion '{$action}' no se encontro en el controlador");
    }
} catch (Exception $e){
    echo "Error: " . $e->getMessage();
}
