<?php

//Funcion para renderizar el login
function showLogin()
{
    $title = "Iniciar Sesion";

    $viewFile = './app/views/auth/loginView.php';

    if (file_exists($viewFile)) {
        ob_start();
        require_once $viewFile;
        $content = ob_get_clean();

        require_once './app/views/layouts/guest-layout.php';
    } else {
        die("Error: la vista no se encontro");
    }
}
