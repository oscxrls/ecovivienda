<?php
namespace App;

use PDO;
use PDOException;

class Database {
    private $host = '127.0.0.1';
    private $port = 3307;        // El puerto a utilizar, por defecto es 3306, pero aquí se usa 3307
    private $dbname = 'ecoviviendas';
    private $username = 'root';
    private $password = '';

    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}