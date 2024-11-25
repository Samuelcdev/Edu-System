<?php

//Funcion para renderizar la landing page
class SiteController
{
    public function showLanding()
    {
        $data = [
            'title' => 'Inicio',
        ];

        renderView('user/site', $data, 'app-layout');
    }
}
