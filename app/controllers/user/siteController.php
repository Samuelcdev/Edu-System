<?php

//Funcion para renderizar la landing page
function showLanding()
{
    $title = "Inicio";

    $viewFile = './app/views/user/site.php';

    if (file_exists($viewFile)) {
        ob_start();
        require_once $viewFile;
        $content = ob_get_clean();

        require_once './app/views/layouts/app-layout.php';
    } else {
        die("Error: La vista no se encontro");
    }
}
