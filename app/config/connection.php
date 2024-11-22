<?php

class Connection
{
    private $driver = "mysql";
    private $host = "localhost";
    private $database = "edu-system";
    private $username = "root";
    private $password = "";
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("{$this->driver}:host={$this->host};dbname={$this->database};charset=utf8", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Conexion Fallida" . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
