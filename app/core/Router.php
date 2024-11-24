<?php

class Router
{
    private $routes = [];
    private $params = [];
    private $baseDir;

    public function __construct() {
        $this->baseDir = $baseDir;
    }

    public function dispatch($url){
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'site';
        $action = isset($_GET['action']) ? $_GET['action'] : 'showLanding';

        try{
            return $this->loadController($controller, $action);
        } catch(Exception $e){
            echo "Error: " .$e->getMessage();
            return false;
        }
    }

    private function loadController($controller, $action){
        $controllerClass = $this->formatControllerName($controller);
        $controllerPath = $this->findControllerFile($controllerClass);

        if(!$controllerPath){
            throw new Exception("Controlador no encontrado: '{$controllerClass}'");
        }

        require_once $controllerPath;

        if(!class_exists($controllerClass)){
            throw new Exception("Clase no encontrada: '{$controllerClass}'");
        }

        $controllerInstance = new $controllerClass();

        if(!method_exists($controllerInstance, $action)){
            throw new Exception("El metodo en la '{$action}' no se encontro en la clase: '{$controllerClass}'");
        }

        return $controllerInstance->$action();
    }

    private function formatControllerName($controller){
        $controller = ucfirst(strtolower($controller));
        if(!str_ends_with($controller, 'Controller')){
            $controller .= 'Controller';
        }

        return $controller;
    }

    private function findControllerFile($controllerClass){
        $controllerFile = $controllerClass . '.php';
        $paths = [
            'auth' => $this->baseDir .  '/controllers/auth/',
            'site' => $this->baseDir . '/controller/user/',
        ];

        $prefix = strtolower(str_replace('Controller', '', $controllerClass));

        if(isset($prefix)){
            $fullPath = $paths[$prefix]. $controllerFile;
            if(file_exists($fullPath)){
                return $fullPath;
            }
        }

        foreach($paths as $path){
            $fullPath = $path . $controllerFile;
            if(file_exists($fullPath)){
                return $fullPath;
            }
        }

        return null;
    }
}
