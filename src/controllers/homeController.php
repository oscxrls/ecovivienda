<?php
namespace App\Controllers;

use App\Models\Propiedad;
use App\Models\Blog;

class HomeController {
    public function index() {
        // Obtener todas las propiedades desde la base de datos
        $propiedades = Propiedad::obtenerTodas();

        // Blogs definidos en array 
        $blogs = [
            new Blog(['id' => 1, 'titulo' => 'Guía de decoración de tu habitación', 'fecha' => '2024-05-01', 'imagen' => 'blog1.jpg', 'resumen' => 'Aprende cómo transformar tu habitación en un espacio ecológico y acogedor.']),
            new Blog(['id' => 2, 'titulo' => 'Guía de decoración de tu ecovivienda', 'fecha' => '2024-05-05', 'imagen' => 'blog2.jpg', 'resumen' => 'Ideas y materiales sostenibles para decorar toda tu casa.']),
        ];

        require_once __DIR__ . '/../views/home.php';
    }

    public function nosotros() {
        require_once __DIR__ . '/../views/nosotros.php';
    }

    public function contacto() {
        require_once __DIR__ . '/../views/contacto.php';
    }
}