<?php
class Database {
    public static function conectar() {
        $host = 'localhost';
        $db = 'ecoviviendas';
        $usuario = 'root';
        $password = '';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}