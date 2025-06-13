<?php
namespace App\Controllers;

use App\Models\Propiedad;

class PropiedadController {
    public function listar() {
        $propiedades = Propiedad::obtenerTodas();
        require_once __DIR__ . '/../views/propiedades/index.php';
    }

    public function ver($id) {
        $propiedad = Propiedad::obtenerPorId($id);

        if (!$propiedad) {
            echo "<main class='container'><h1>Propiedad no encontrada</h1></main>";
            return;
        }

        require_once __DIR__ . '/../views/propiedades/ver.php';
    }
}