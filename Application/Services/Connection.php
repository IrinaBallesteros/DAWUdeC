<?php
namespace services;

class Conexion {
    private $host = 'localhost';
    private $db = 'Miphp';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->pdo = new \PDO($dsn, $this->user, $this->pass);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getConexion() {
        return $this->pdo;
    }
}