<?php
namespace App\Models;

use App\Database;
use PDO;

class Blog {
    public $id;
    public $titulo;
    public $contenido;
    public $imagen;
    public $fecha;
    public $autor_id;
    public $resumen;

    public function __construct($data) {
        $this->id = $data['id'] ?? null;
        $this->titulo = $data['titulo'] ?? '';
        $this->contenido = $data['contenido'] ?? '';
        $this->imagen = $data['imagen'] ?? '';
        $this->fecha = $data['fecha'] ?? date('Y-m-d');
        $this->autor_id = $data['autor_id'] ?? null;
        $this->resumen = $data['resumen'] ?? '';
    }

    public static function obtenerTodas() {
        $db = new Database();  
        $conn = $db->getConexion();

        $stmt = $conn->query("SELECT * FROM blogs ORDER BY fecha DESC LIMIT 3");
        $resultados = [];

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {  
            $resultados[] = new self($fila);
        }

        return $resultados;
    }
}