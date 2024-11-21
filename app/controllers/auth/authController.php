<?php

//Funcion para renderizar el login
function loginForm()
{
    $title = "Iniciar Sesion";

    $viewFile = './app/views/auth/login.php';

    if (file_exists($viewFile)) {
        ob_start();
        require_once $viewFile;
        $content = ob_get_clean();

        require_once './app/views/layouts/guest-layout.php';
    } else {
        die("Error: La vista de la pagina de inicio no se encontro");
    }
}
