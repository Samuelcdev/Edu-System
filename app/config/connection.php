<?php

class Connection{
    protected $dsn;
    private $driver = "mysql";
    private $host = "localhost";
    private $database = "edu-system";
    private $username = "root";
    private $password = "";

    public function __construct(){
        try{
            $dsn = new PDO("{$this->driver}:host={$this->host};database={$this->database}", $this->username, $this->password);
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dsn;
        } catch (PDOException $e){
            echo "Conexion Fallida" . $e->getMessage();
        }
    }
}
