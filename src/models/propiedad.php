<?php
namespace App\Models;

use App\Database;
use PDO;

class Propiedad {
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $banos;
    public $estacionamientos;
    public $metros;
    public $ciudad;
    public $calle;
    public function __construct($datos) {
        foreach ($datos as $clave => $valor) {
            $this->$clave = $valor;
        }
    }

    public static function obtenerTodas() {
        $db = new Database();
        $conexion = $db->getConexion();

        $stmt = $conexion->query("SELECT * FROM propiedades");
        $resultados = [];

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $resultados[] = new self($fila);
        }

        return $resultados;
    }

    public static function obtenerPorId($id) {
        $db = new Database();
        $conexion = $db->getConexion();

        $stmt = $conexion->prepare("SELECT * FROM propiedades WHERE id = ?");
        $stmt->execute([$id]);

        $fila = $stmt->fetch(PDO::FETCH_ASSOC);
        return $fila ? new self($fila) : null;
    }
    
}
