<?php
namespace App\Models;

class Vendedor {
    public $id;
    public $nombre;
    public $telefono;

    public function __construct($data) {
        $this->id = $data['id'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
        $this->telefono = $data['telefono'] ?? '';
    }
}