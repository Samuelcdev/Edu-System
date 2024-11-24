<?php
require_once './app/config/connection.php';

$controller = $_GET['controller'] ?? 'site';
$action = $_GET['action'] ?? 'showLanding';
$controllerClass = ucfirst($controller) . 'Controller';
$controllerFileName = $controllerClass . '.php';

$baseDir = __DIR__ . '/app/controllers';

$searchPaths = [
    'auth' => $baseDir . '/auth/',
    'site' => $baseDir . '/user/',
];

$controllerPath = isset($searchPaths[$controller])
    ? $searchPaths[$controller] . $controllerFileName
    : $baseDir . '/' . $controllerFileName;
if (!file_exists($controllerPath)) {
    die("Error: el controlador '{$controllerFileName}' no fue encontrado en {$controllerPath}");
}

try {
    require_once $controllerPath;
    if (class_exists($controllerClass)) {
        $controllerInstance = new $controllerClass();

        if (method_exists($controllerInstance, $action)) {
            $controllerInstance->$action();
        } else {
            throw new Exception("La acción '{$action}' no se encontró en el controlador");
        }
    } else {
        throw new Exception("El controlador '{$controllerClass}' no se encontró");
    }
} catch (Exception $e) {
    echo "Error: " . htmlspecialchars($e->getMessage());
}

function renderView($viewFile, $data = [], $layout = 'guest-layout')
{
    $viewPath = __DIR__ . "/app/views/{$viewFile}.php";
    $layoutPath = __DIR__ . "/app/views/layouts/{$layout}.php";

    if (!file_exists($viewPath)) {
        die("Error: la vista '{$viewFile}' no se encontró. Buscando en '{$viewPath}'");
    }

    extract($data);

    ob_start();
    require $viewPath;
    $content = ob_get_clean();

    if (file_exists($layoutPath)) {
        require $layoutPath;
    } else {
        die("Error: el layout {$layout} no se encontró");
    }
}
