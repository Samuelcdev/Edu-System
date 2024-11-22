<?php

require_once __DIR__ . '/../config/connection.php';

class BaseModal
{
    protected $connection;

    //Funcion para crear instancia de la base de datos y obtener la conexion
    public function __construct()
    {
        $db = new Connection();
        $this->connection = $db->getConnection();
    }
}
